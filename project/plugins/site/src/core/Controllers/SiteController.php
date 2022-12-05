<?php

declare(strict_types=1);

/**
 * @link https://awilum.github.io/flextype
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype\Plugin\Site\Controllers;

use Flextype\Plugin\Site\Site;
use Glowy\View\View;
use Glowy\Macroable\Macroable;
use Slim\Http\Environment;
use Slim\Http\Uri;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use function ltrim;
use function Flextype\registry;
use function Flextype\entries;
use function Flextype\serializers;

class SiteController
{
    /**
     * Index page
     *
     * @param Request  $request  PSR7 request
     * @param Response $response PSR7 response
     * @param array    $args     Args
     */
    public function index(ServerRequestInterface $request, ResponseInterface $response, $uri): ResponseInterface
    {
        // Create site instance.
        $site = new Site();

        // Get Query Params.
        $query = $request->getQueryParams();

        // Page format.
        $format = isset($query['format']) ? $query['format'] : 'html';

        // If uri is empty then it is main entry else use entry uri
        if ($uri === '/') {
            $entryUri = registry()->get('plugins.site.settings.entries.main');
        } else {
            $entryUri = ltrim($uri, '/');
        }
        
        // Get entry body
        $entryBody = entries()->fetch($entryUri)->toArray();

        // is entry not found
        $isEntryNotFound = false;

        // If entry body is not false
        if (is_array($entryBody) and count($entryBody) > 0) {
            // Get 404 page if entry visibility is draft or hidden and if routable is false
            if ((isset($entryBody['visibility']) && ($entryBody['visibility'] === 'draft' || $entryBody['visibility'] === 'hidden')) ||
                (isset($entryBody['routable']) && ($entryBody['routable'] === false))) {
                $entry           = $site->error404();
                $isEntryNotFound = true;
            } else {
                $entry = $entryBody;
            }
        } else {
            $entry           = $site->error404();
            $isEntryNotFound = true;
        }

        // Set template path for current entry
        $template = isset($entry['template']) ? $entry['template'] : registry()->get('plugins.site.settings.templates.default');

        // Check template file
        if (! file_exists(FLEXTYPE_PATH_PROJECT . '/' . registry()->get('plugins.site.settings.templates.directory') . '/' . $template . '.' . registry()->get('plugins.site.settings.templates.extension'))) {
            $response->getBody()->write("Template {$template} not found");
            $response = $response->withStatus(404);
            return $response;
        }

        $http_status_code = $isEntryNotFound ? 404 : 200;

        $data = array_merge([
                             'uri' => $uri, 
                             'http_status_code' => $http_status_code, 
                             'query' => $query, 
                             'request' => $request
                            ], 
                            $entry);

        switch ($format) {
            case 'json':
                if (count($entry) > 0) {
                    $response->getBody()->write(serializers()->json()->encode($entry));
                }
        
                $response = $response->withStatus($http_status_code);
                $response = $response->withHeader('Content-Type', 'application/json;charset=' . registry()->get('flextype.settings.charset'));
        
                return $response;
                break;
            case 'html':
            default:
                return $site->renderResponse($response, $data);
                break;
        }

        return $response;
    }
}
