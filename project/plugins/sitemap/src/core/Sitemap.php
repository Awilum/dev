<?php

namespace Flextype\Plugin\Sitemap;

use function Flextype\entries;
use function Flextype\registry;
use function Flextype\emitter;
use function Flextype\Plugin\Twig\twig;
use function Glowy\Strings\strings;

class Sitemap {
    public function fetch($trailingSlash = false)
    {
        $sitemap = [];

        $entries = entries()->fetch('', ['collection' => true, 'find' => ['depth' => '> 0']])
                            ->sortBy('modified_at', 'asc')
                            ->toArray();

        foreach ($entries as $entry) {

            // Check entry visibility field
            if (isset($entry['visibility']) && ($entry['visibility'] === 'draft' || $entry['visibility'] === 'hidden')) {
                continue;
            }

            // Check entry routable field
            if (isset($entry['routable']) && ($entry['routable'] === false)) {
                continue;
            }

            // Check entry sitemap.ignore field
            if (isset($entry['sitemap']['ignore']) && ($entry['sitemap']['ignore'] === true)) {
                continue;
            }

            // Check entry changefreq field
            if (isset($entry['sitemap']['changefreq'])) {
                $entry['changefreq'] = $entry['sitemap']['changefreq'];
            } else {
                $entry['changefreq'] = registry()->get('plugins.sitemap.settings.default.changefreq');
            }

            // Check entry priority field
            if (isset($entry['sitemap']['priority'])) {
                $entry['priority'] = $entry['sitemap']['priority'];
            } else {
                $entry['priority'] = registry()->get('plugins.sitemap.settings.default.priority');
            }

            // Check ignore list
            if (in_array($entry['id'], (array) registry()->get('plugins.sitemap.settings.ignore'))) {
                continue;
            }

            // Prepare data
            $entry_to_add['loc']        = $entry['id'] . ($trailingSlash ? '/' : '');
            $entry_to_add['lastmod']    = $entry['modified_at'];
            $entry_to_add['changefreq'] = $entry['changefreq'];
            $entry_to_add['priority']   = $entry['priority'];

            // Add entry to sitemap
            $sitemap[] = $entry_to_add;
        }

        // Additions
        $additions = (array) registry()->get('plugins.sitemap.settings.additions');
        foreach ($additions as $addition) {
            $sitemap[] = $addition;
        }

        // Set entry to the SitemapController class property $sitemap
        registry()->set('plugins.sitemap.items', $sitemap);

        // Run event onSitemapAfterInitialized
        emitter()->emit('onSitemapAfterInitialized');
        
        $renderedTemplate = twig()->fetch(
            'plugins/sitemap/views/templates/index.html',
            [
                'sitemap' => registry()->get('plugins.sitemap.items')
            ]);

        return $renderedTemplate;
    }
}