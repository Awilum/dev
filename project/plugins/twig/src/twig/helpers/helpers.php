<?php

declare(strict_types=1);

namespace Flextype\Plugin\Twig;

use function Flextype\container;

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

if (! function_exists('twig')) {
    /**
     * Get Flextype Twig Service.
     */
    function twig()
    {
        return container()->get('twig');
    }
}

if (! function_exists('flash')) {
    /**
     * Get Flextype Flash Service.
     */
    function flash()
    {
        return container()->get('flash');
    }
}