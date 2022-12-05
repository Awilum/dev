<?php

declare(strict_types=1);

namespace Flextype\Plugin\Feed;

use Flextype\Plugin\Feed\Console\Commands\Feed\FeedGenerateCommand;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use function Flextype\console;
use function Flextype\registry;
use function Flextype\emitter;
use function Flextype\cache;
use function Flextype\app;
use function Glowy\Strings\strings;

/**
 * Ensure vendor libraries exist
 */
! is_file($feedAutoload = __DIR__ . '/vendor/autoload.php') and exit('Please run: <i>composer install</i> for feed plugin');

/**
 * Register The Auto Loader
 *
 * Composer provides a convenient, automatically generated class loader for
 * our application. We just need to utilize it! We'll simply require it
 * into the script here so that we don't have to worry about manual
 * loading any of our classes later on. It feels nice to relax.
 * Register The Auto Loader
 */
$feedLoader = require_once $feedAutoload;

// Add feed generate console command
console()->add(new FeedGenerateCommand());

$feeds = registry()->get('plugins.feed.settings.feeds');

if (is_array($feeds) && count($feeds) > 0) {
    foreach ($feeds as $feed) {
        
        $cacheID = strings('feed-collection-' . $feed['id'] . '-' . json_encode($feed['options']))->hash()->toString();

        // Delete feed collection from cache on these events:
        emitter()->addListener('onEntriesCreate', fn () => cache()->delete($cacheID));
        emitter()->addListener('onEntriesDelete', fn () => cache()->delete($cacheID));
        emitter()->addListener('onEntriesMove', fn () => cache()->delete($cacheID));
        emitter()->addListener('onEntriesCopy', fn () => cache()->delete($cacheID));
        emitter()->addListener('onEntriesUpdate', fn () => cache()->delete($cacheID));

        app()->get($feed['options']['feed']['route'], function (ServerRequestInterface $request, ResponseInterface $response) use ($feed, $cacheID) {
            
            if (cache()->has($cacheID)) {
                $entries = cache()->get($cacheID);
            } else {
                $entries = entries()->fetch($feed['id'], $feed['options'])->sortBy('published_at', 'DESC');
                cache()->set($cacheID, $entries);
            }

            switch ($feed['options']['feed']['format']) {
                case 'rss':
                    $response = $response->withHeader('Content-Type', 'application/rss+xml');
                    $template =  isset($feed['options']['feed']['template']) ? $feed['options']['feed']['template'] : 'plugins/feed/views/templates/feed.rss.html';
                    break;
                case 'atom':
                    $response = $response->withHeader('Content-Type', 'application/atom+xml');
                    $template = isset($feed['options']['feed']['template']) ? $feed['options']['feed']['template'] : 'plugins/feed/views/templates/feed.atom.html';
                    break;
                case 'json':
                default:
                    $response = $response->withHeader('Content-Type', 'application/json');
                    $template = isset($feed['options']['feed']['template']) ? $feed['options']['feed']['template'] : 'plugins/feed/views/templates/feed.json.html';
                    break;
            }

            $response->withStatus(200); 
            $response->getBody()->write(twig()->fetch($template, ['entries' => $entries, 'feed' => $feed]));
          
            return $response;
        });
    }
}