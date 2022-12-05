<?php

declare(strict_types=1);

 /**
 * Flextype - Hybrid Content Management System with the freedom of a headless CMS 
 * and with the full functionality of a traditional CMS!
 * 
 * Copyright (c) Sergey Romanenko (https://awilum.github.io)
 *
 * Licensed under The MIT License.
 *
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 */

namespace Flextype\Plugin\Twig\Parsers\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Flextype\Entries\Entries;

use function Flextype\entries;
use function Flextype\parsers;
use function Flextype\registry;
use function Flextype\Plugin\Twig\twig;

// Shortcode: (twig) Twig code here... (/twig)
parsers()->shortcodes()->addHandler('twig', static function (ShortcodeInterface $s) {
    if (! registry()->get('plugins.twig.settings.parsers.shortcodes.shortcodes.twig.enabled')) {
        return '';
    }
    
    if ($s->getContent() != null) {
        return twig()->fetchFromString($s->getContent(), []);
    }

    return '@twig';
});