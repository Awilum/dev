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
use Glowy\Arrays\Arrays as Collection;
use Twig\TwigFunction;
use function Flextype\collection;
use function Flextype\collectionFromJson;
use function Flextype\collectionFromString;
use function Flextype\collectionWithRange;
use function Flextype\collectionFromQueryString;
use function Flextype\filterCollection;

class CollectionTwigExtension extends AbstractExtension
{
    /**
     * Callback for twig.
     *
     * @return array
     */
    public function getFunctions() : array
    {
        return [
            new TwigFunction('collection', '\Flextype\collection'),
            new TwigFunction('collectionFromJson', '\Flextype\collectionFromJson'),
            new TwigFunction('collectionFromString', '\Flextype\collectionFromString'),
            new TwigFunction('collectionWithRange', '\Flextype\collectionWithRange'),
            new TwigFunction('collectionFromQueryString', '\Flextype\collectionFromQueryString'),
            new TwigFunction('filterCollection', '\Flextype\filterCollection'),
        ];
    }
}
