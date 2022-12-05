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

namespace Flextype\Plugin\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use function Flextype\parsers;

class FiltersTwigExtension extends AbstractExtension
{
    /**
     * Returns a list of filters to add to the existing list.
     *
     * @return array
     */
    public function getFilters() : array
    {
        return [
            new TwigFilter('shortcodes', [$this, 'shortcodes']),
            new TwigFilter('textile', [$this, 'textile']),
            new TwigFilter('markdown', [$this, 'markdown']),
            new TwigFilter('expressions', [$this, 'expressions']),
        ];
    }

    public function shortcodes($value): string
    {
        return !empty($value) ? parsers()->shortcodes()->parse($value) : '';
    }

    public function textile($value): string
    {
        return !empty($value) ? parsers()->textile()->parse($value) : '';
    }

    public function markdown($value): string
    {
        return !empty($value) ? parsers()->markdown()->parse($value) : '';
    }

    public function expressions($value): string
    {
        return !empty($value) ? parsers()->expressions()->evaluate($value) : '';
    }
}
