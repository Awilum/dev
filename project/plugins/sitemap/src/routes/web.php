<?php

declare(strict_types=1);

namespace Flextype;

/**
 * @link https://awilum.github.io/flextype
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Flextype\Plugin\Sitemap\Controllers\SitemapController;
use function Flextype\app;
use function Flextype\registry;

app()->get(registry()->get('plugins.sitemap.settings.route'), [SitemapController::class, 'index'])->setName('sitemap.index');
