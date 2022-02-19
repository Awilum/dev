<?php

declare(strict_types=1);

/**
 * Flextype (https://flextype.org)
 * Founded by Sergey Romanenko and maintained by Flextype Community.
 */

namespace Flextype;

use function define;
use function getcwd;
use function is_file;
use function sprintf;
use function str_replace;
use function version_compare;
use const DIRECTORY_SEPARATOR;
use const PHP_VERSION;


class Debug
{
    /**
     * Time
     *
     * @var array
     */
    protected static $time = [];

    /**
     * Memory
     *
     * @var array
     */
    protected static $memory = [];

    /**
     * Save current time for current point
     *
     * Debug::elapsedTimeSetPoint('point_name');
     *
     * @param string $point_name Point name
     */
    public static function elapsedTimeSetPoint(string $point_name) : void
    {
        Debug::$time[$point_name] = microtime(true);
    }

    /**
     * Get elapsed time for current point
     *
     * echo Debug::elapsedTime('point_name');
     *
     * @param  string $point_name Point name
     * @return string
     */
    public static function elapsedTime(string $point_name) : string
    {
        if (isset(Debug::$time[$point_name])) return sprintf("%01.3f", microtime(true) - Debug::$time[$point_name]);
    }

    /**
     * Save current memory for current point
     *
     * Debug::memoryUsageSetPoint('point_name');
     *
     * @param string $point_name Point name
     */
    public static function memoryUsageSetPoint(string $point_name) : void
    {
        Debug::$memory[$point_name] = memory_get_usage();
    }

    /**
     * Get memory usage for current point
     *
     * echo Debug::memoryUsage('point_name');
     *
     * @param  string $point_name Point name
     * @return string
     */
    public static function memoryUsage(string $point_name) : string
    {
        if (isset(Debug::$memory[$point_name])) {
            $unit = array('B', 'KB', 'MB', 'GB', 'TiB', 'PiB');
            $size = memory_get_usage() - Debug::$memory[$point_name];
            $memory_usage = @round($size/pow(1024, ($i=floor(log($size, 1024)))), 2).' '.$unit[($i < 0 ? 0 : $i)];
            return $memory_usage;
        }
    }
}

Debug::elapsedTimeSetPoint('flexype-time');
Debug::memoryUsageSetPoint('flexype-memory');

/**
 * Define the application minimum supported PHP version.
 */
define('FLEXTYPE_MINIMUM_PHP', '7.4.0');

/**
 * Define the PATH to the root directory (without trailing slash).
 */
define('ROOT_DIR', str_replace(DIRECTORY_SEPARATOR, '/', getcwd()));

/**
 * Define the PATH (without trailing slash).
 */
define('PATH', [
    'project' => ROOT_DIR . '/project',
    'tmp'     => ROOT_DIR . '/var/tmp',
]);

/**
 * Check PHP Version
 */
version_compare($ver = PHP_VERSION, $req = FLEXTYPE_MINIMUM_PHP, '<') and exit(sprintf('You are running PHP %s, but Flextype needs at least <strong>PHP %s</strong> to run.', $ver, $req));

/**
 * Ensure vendor libraries exist
 */
! is_file($flextypeAutoload = __DIR__ . '/vendor/autoload.php') and exit('Please run: <i>composer install</i> for flextype');

/**
 * Register The Auto Loader
 *
 * Composer provides a convenient, automatically generated class loader for
 * our application. We just need to utilize it! We'll simply require it
 * into the script here so that we don't have to worry about manual
 * loading any of our classes later on. It feels nice to relax.
 * Register The Auto Loader
 */
$flextypeLoader = require_once $flextypeAutoload;

if (! function_exists('str_contains')) {
    function str_contains(string $haystack , string $needle): bool
    {
        return strings($haystack)->contains($needle);
    }
}

function blockRequest() {
    echo('<center style="margin-top: 100px; font-family: arial;"><h1>This action is not allowed for current demo.</h1> <a style="text-decoration: none; font-weight: bold; text-transform: uppercase; color: black;" href="javascript:history.go(-1);">&lt; Go back</a></center>');
    die();
}

if (($_POST || $_FILES) &&
    (! str_contains($_SERVER["REQUEST_URI"], 'admin/accounts/logout') &&
     ! str_contains($_SERVER["REQUEST_URI"], 'admin/accounts/login'))) {
       blockRequest();
}

if ($_SERVER["REQUEST_URI"] == '/bible/admin/tools/cache') {
    blockRequest();
}

/**
 * Bootstraps the Flextype
 *
 * This bootstraps the Flextype and gets it ready for use, then it
 * will load up this application so that we can run it and send
 * the responses back to the browser and delight our users.
 */
include __DIR__ . '/src/flextype/bootstrap.php';
/*
echo '<div style="border-top: 1px solid #333; position: fixed; left: 0; bottom: 0; width:100%; color: #333; padding-top: 8px; padding-bottom: 8px; font-family: -apple-system, BlinkMacSystemFont, Roboto, Ubuntu, Cantarell, sans-serif, Arial; font-size: 11px; text-align: center; display: block; background: white;">';
echo 'ELAPSED TIME: ' . Debug::elapsedTime('flexype-time') . 'ms | MEMORY USAGE: '. Debug::memoryUsage('flexype-memory');
echo ' | ';
echo 'POWERED BY <a href="https://flextype.org" style="color: #333; text-decoration: underline;">FLEXTYPE</a>';
echo '</div>';
*/