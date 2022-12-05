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
use Twig\TwigFunction;
use function Flextype\urlFor;
use function Flextype\fullUrlFor;
use function Flextype\getBasePath;
use function Flextype\getBaseUrl;
use function Flextype\getCurrentUrl;
use function Flextype\getAbsoluteUrl;
use function Flextype\getUriString;
use function Flextype\redirect;
use function Flextype\getProjectUrl;

class UrlTwigExtension extends AbstractExtension
{
    /**
     * Callback for twig.
     *
     * @return array
     */
    public function getFunctions() : array
    {
        return [
            new TwigFunction('url', '\Flextype\url'),
            new TwigFunction('urlFor', '\Flextype\urlFor'),
            new TwigFunction('fullUrlFor', '\Flextype\fullUrlFor'),
            new TwigFunction('getBasePath', '\Flextype\getBasePath'),
            new TwigFunction('getBaseUrl', '\Flextype\getBaseUrl'),
            new TwigFunction('getCurrentUrl', '\Flextype\getCurrentUrl'),
            new TwigFunction('getAbsoluteUrl', '\Flextype\getAbsoluteUrl'),
            new TwigFunction('getUriString', '\Flextype\getUriString'),
            new TwigFunction('redirect', '\Flextype\redirect'),
            new TwigFunction('getProjectUrl', '\Flextype\getProjectUrl')
        ];
    }
}
