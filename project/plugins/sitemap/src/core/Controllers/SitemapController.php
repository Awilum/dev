<?php

namespace Flextype\Plugin\Sitemap\Controllers;

use Flextype\Plugin\Sitemap\Sitemap;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class SitemapController
{
    /**
     * Index page
     *
     * @param Request  $request  PSR7 request
     * @param Response $response PSR7 response
     * @param array    $args     Args
     */
    public function index(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $response = $response->withHeader('Content-Type', 'application/xml');                
        $response->getBody()->write((new Sitemap)->fetch(trailingSlash: registry()->get('plugins.sitemap.settings.trailing_slash')));
        $response = $response->withStatus(200);
        return $response;
    }
}
