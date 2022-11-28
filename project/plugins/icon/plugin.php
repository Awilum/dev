<?php

declare(strict_types=1);

/**
 * @link https://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype\Plugin\Icon;

use Twig\TwigFunction;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use function Flextype\parsers;
use function Flextype\Plugin\Twig\twig;
use function Glowy\Filesystem\filesystem;

/**
 * Get SVG icon from specific icons set.
 *
 * @param string|null  $name Icon name.
 * @param string|null  $set  Icon set:
 *                             - tabler
 *                             - bootstrap
 *                             - fontawesome|brands,
 *                             - fontawesome|regular
 *                             - fontawesome|solid
 * @param string|null  $class CSS Class.
 * @param string|null  $style CSS Style.
 *
 * @return string
 */
function icon(?string $name = null, ?string $set = 'fontawesome|solid', ?string $class = null, ?string $style = null): string
{
    switch ($set) {
        case 'tabler':
            $iconFilePath = FLEXTYPE_PATH_PROJECT . '/plugins/icon/assets/dist/tabler/icons/' . $name . '.svg';
            break;
        case 'bootstrap':
            $iconFilePath = FLEXTYPE_PATH_PROJECT . '/plugins/icon/assets/dist/bootstrap/icons/' . $name . '.svg';
            break;
        case 'fontawesome|brands':
            $iconFilePath = FLEXTYPE_PATH_PROJECT . '/plugins/icon/assets/dist/fontawesome/icons/brands/' . $name . '.svg';
            break;
        case 'fontawesome|regular':
            $iconFilePath = FLEXTYPE_PATH_PROJECT . '/plugins/icon/assets/dist/fontawesome/icons/regular/' . $name . '.svg';
            break;
        case 'fontawesome|solid':
        default:
            $iconFilePath = FLEXTYPE_PATH_PROJECT . '/plugins/icon/assets/dist/fontawesome/icons/solid/' . $name . '.svg';
            break;
    }

    $sadSmileSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bootstrap" viewBox="0 0 16 16">
                        <path d="M5.062 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062V12zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377H6.375z"/>
                        <path d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4zm4-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3H4z"/>
                    </svg>';

    $iconSVG = filesystem()->file($iconFilePath)->exists() ? filesystem()->file($iconFilePath)->get() : $sadSmileSVG;

    return ! is_null($class) ? '<span class="' . $class . '" style="' . $style . '">' . $iconSVG . '</span>' : $iconSVG ;
}

// Shortcode: [icon name="apple" set="fontawesome|brands" class="" style=""]
parsers()->shortcodes()->addHandler('icon', function (ShortcodeInterface $s) {
    return icon(! is_null($s->getParameter('name')) ? $s->getParameter('name') : null,
                ! is_null($s->getParameter('set')) ? $s->getParameter('set') : null,
                ! is_null($s->getParameter('class')) ? $s->getParameter('class') : '',
                ! is_null($s->getParameter('style')) ? $s->getParameter('style') : '');
});

// Twig: {{ icon('apple', 'fontawesome|brands', '', '') }}
twig()->addFunction(new TwigFunction('icon', function (?string $name = null, ?string $set = 'fontawesome|solid', ?string $class = null, ?string $style = null) {
    return icon($name, $set, $class, $style);
}, ['is_safe' => ['html']]));