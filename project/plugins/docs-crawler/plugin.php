<?php

declare(strict_types=1);

namespace Flextype\Plugin\Feed;

use Flextype\Plugin\DocsCrawler\Console\Commands\DocsParsers\MastercssParserCommand;
use Flextype\Plugin\DocsCrawler\Console\Commands\DocsParsers\TailwindcssParserCommand;
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


console()->add(new MastercssParserCommand());
console()->add(new TailwindcssParserCommand());