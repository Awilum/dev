<?php

/**
 * Bootstrap Blog
 */

use Atomastic\Arrays\Arrays;
use Atomastic\Macroable\Macroable;
use Twig\TwigFunction;
use Slim\Http\Uri;
use Slim\Http\Environment;

Arrays::macro('onlyFromCollection', function(array $keys) {
    $result = [];

    foreach ($this->toArray() as $key => $value) {
        $result[$key] = arrays($value)->only($keys)->toArray();
    }

    return arrays($result);
});

Arrays::macro('exceptFromCollection', function(array $keys) {
    $result = [];

    foreach ($this->toArray() as $key => $value) {
        $result[$key] = arrays($value)->except($keys)->toArray();
    }

    return arrays($result);
});

$blogCollectionCacheID = strings('blog-collection-' . flextype('registry')
                                                            ->get('themes.bootstrap-blog.settings.blog_id'))
                                                            ->hash()
                                                            ->toString();


/**
 * Get page view counter
 *
 * @return int
 */
function pageViewCounter(): int
{
    $page = Uri::createFromEnvironment(new Environment($_SERVER))->getPath();

    $saveDir = PATH['project'] . '/data/page-view-counter/';

    if ($page === '') {
        $page = flextype('registry')->get('plugins.site.settings.entries.main');
    } else {
        $page = str_replace("/", "-", ltrim(rtrim($page, '/'), '/'));
    }

    ! filesystem()->directory($saveDir)->exists() and filesystem()->directory($saveDir)->create(0755, true);

    if (! filesystem()->file($saveDir . $page . '.txt')->exists()) {
        filesystem()->file($saveDir . $page . '.txt')->put('1');
        return 1;
    } else {
        $count = filesystem()->file($saveDir . $page . '.txt')->get();
        $count++;
        filesystem()->file($saveDir . $page . '.txt')->put((string) $count);

        return $count;
    }
}

function pageViewCounterStats(string $entryID): int
{
    $pageDir = PATH['project'] . '/data/page-view-counter/';

    if ($page === '') {
        $page = flextype('registry')->get('plugins.site.settings.entries.main');
    } else {
        $page = str_replace("/", "-", ltrim(rtrim($entryID, '/'), '/'));
    }

    if (! filesystem()->file($pageDir . $page . '.txt')->exists()) {
        return 0;
    } else {
        return filesystem()->file($pageDir . $page . '.txt')->get();
    }
}

// Shortcode: [pageViewCounter]
flextype('parsers')->shortcode()->addHandler('pageViewCounter', fn () => pageViewCounter());

flextype('twig')->addFunction(new TwigFunction('currentUriContains', function($uri) {
    return false;
    // return strpos($_SERVER['REQUEST_URI'], $uri) !== false;
}));
