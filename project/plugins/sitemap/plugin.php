<?php

declare(strict_types=1);

namespace Flextype\Plugin\Sitemap;

use Flextype\Plugin\Sitemap\Console\Commands\Sitemap\SitemapGenerateCommand;
use function is_file;
use function Flextype\console;

/**
 * Ensure vendor libraries exist
 */
! is_file($sitemapAutoload = __DIR__ . '/vendor/autoload.php') and exit('Please run: <i>composer install</i> for sitemap plugin');

/**
 * Register The Auto Loader
 *
 * Composer provides a convenient, automatically generated class loader for
 * our application. We just need to utilize it! We'll simply require it
 * into the script here so that we don't have to worry about manual
 * loading any of our classes later on. It feels nice to relax.
 * Register The Auto Loader
 */
$sitemapLoader = require_once $sitemapAutoload;

// Add sitemap generate console command
console()->add(new SitemapGenerateCommand());


// Load routes
require_once __DIR__ . '/src/routes/web.php';