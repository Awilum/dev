<?php

declare(strict_types=1);

/**
 * @link https://awilum.github.io/flextype
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype\Plugin\Site;

use Flextype\Plugin\Site\Console\Commands\Site\SiteGenerateCommand;
use Flextype\Plugin\Site\Console\Commands\Cache\CacheClearSiteStaticCommand;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Middlewares\TrailingSlash;
use function is_file;
use function Glowy\Strings\strings;
use function Flextype\console;
use function Flextype\app;
use function Flextype\registry;
use function Flextype\urlFor;
use function Flextype\getBasePath;
use function Flextype\getUriString;
/**
 * Ensure vendor libraries exist
 */
! is_file($siteAutoload = __DIR__ . '/vendor/autoload.php') and exit('Please run: <i>composer install</i> for site plugin');

/**
 * Register The Auto Loader
 *
 * Composer provides a convenient, automatically generated class loader for
 * our application. We just need to utilize it! We'll simply require it
 * into the script here so that we don't have to worry about manual
 * loading any of our classes later on. It feels nice to relax.
 * Register The Auto Loader
 */
$siteLoader = require_once $siteAutoload;

console()->add(new CacheClearSiteStaticCommand());
console()->add(new SiteGenerateCommand());

// Add middleware TrailingSlash for all routes
if (getUriString() !== strings(registry()->get('flextype.settings.base_path'))->prepend('/')->append('/')->toString()) {
   app()->add((new TrailingSlash(registry()->get('plugins.site.settings.trailing_slash')))->redirect());
}

// Load routes
require_once __DIR__ . '/src/routes/web.php';

// Redirects
$redirects = registry()->get('plugins.site.settings.redirects');
if (count($redirects) > 0) {
    foreach ($redirects as $redirect) {
        app()->get($redirect['from'], function (ServerRequestInterface $request, ResponseInterface $response) use ($redirect) {
            
            $to = '';

            if (isset($redirect['to_route_name'])) {
                $to = urlFor($redirect['to_route_name'], isset($redirect['data']) ? $redirect['data'] : [], isset($redirect['queryParams']) ? $redirect['queryParams'] : []);
            }

            if (isset($redirect['to'])) {
                $to = getBasePath() . $redirect['to'];
            }

            if (isset($redirect['to_external'])) {
                header('Location: ' . $redirect['to_external'], true, isset($redirect['status']) ? $redirect['status'] : 301);
                exit(1);
            }

            $response = $response->withStatus(isset($redirect['status']) ? $redirect['status'] : 301);
            $response = $response->withHeader('Location', $to);
            return $response;
        });
    }
}