---
title: Themes
template: thermage/documentation/default
---

Thermage provides ability to create and use custom themes to change the style of command line output with preconfigured themes variables.

### Default theme variables

```php 
final public function getDefaultVariables(): Collection
{
    return collection([
        // Colors.
        'colors' => [
            'white'   => '#ffffff',
            'gray100' => '#f8f9fa',
            'gray200' => '#e9ecef',
            'gray300' => '#dee2e6',
            'gray400' => '#ced4da',
            'gray500' => '#adb5bd',
            'gray600' => '#6c757d',
            'gray700' => '#495057',
            'gray800' => '#343a40',
            'gray900' => '#212529',
            'black'   => '#000000',

            'blue'    => '#007bff',
            'blue100' => '#a8cbfe',
            'blue200' => '#81b4fe',
            'blue300' => '#5a9cfe',
            'blue400' => '#3485fd',
            'blue500' => '#0d6efd',
            'blue600' => '#0b5cd5',
            'blue700' => '#094bac',
            'blue800' => '#073984',
            'blue900' => '#05285b',

            'indigo'    => '#6610f2',
            'indigo100' => '#c8a9fa',
            'indigo200' => '#af83f8',
            'indigo300' => '#975cf6',
            'indigo400' => '#7e36f4',
            'indigo500' => '#6610f2',
            'indigo600' => '#560dcb',
            'indigo700' => '#450ba5',
            'indigo800' => '#35087e',
            'indigo900' => '#250657',

            'purple'    => '#6f42c1',
            'purple100' => '#cbbbe9',
            'purple200' => '#b49ddf',
            'purple300' => '#9d7ed5',
            'purple400' => '#8660cb',
            'purple500' => '#6f42c1',
            'purple600' => '#5d37a2',
            'purple700' => '#4b2d83',
            'purple800' => '#3a2264',
            'purple900' => '#281845',

            'pink'    => '#e83e8c',
            'pink100' => '#f0b6d3',
            'pink200' => '#ea95bf',
            'pink300' => '#e374ab',
            'pink400' => '#dd5498',
            'pink500' => '#d63384',
            'pink600' => '#b42b6f',
            'pink700' => '#92235a',
            'pink800' => '#6f1b45',
            'pink900' => '#4d1230',

            'red'    => '#dc3545',
            'red100' => '#f2b6bc',
            'red200' => '#ed969e',
            'red300' => '#e77681',
            'red400' => '#e25563',
            'red500' => '#dc3545',
            'red600' => '#b92d3a',
            'red700' => '#96242f',
            'red800' => '#721c24',
            'red900' => '#4f1319',

            'orange'    => '#fd7e14',
            'orange100' => '#fed1aa',
            'orange200' => '#febc85',
            'orange300' => '#fea75f',
            'orange400' => '#fd933a',
            'orange500' => '#fd7e14',
            'orange600' => '#d56a11',
            'orange700' => '#ac560e',
            'orange800' => '#84420a',
            'orange900' => '#5b2d07',

            'yellow'    => '#ffc107',
            'yellow100' => '#ffe9a6',
            'yellow200' => '#ffdf7e',
            'yellow300' => '#ffd556',
            'yellow400' => '#ffcb2f',
            'yellow500' => '#ffc107',
            'yellow600' => '#d6a206',
            'yellow700' => '#ad8305',
            'yellow800' => '#856404',
            'yellow900' => '#5c4503',

            'green'    => '#28a745',
            'green100' => '#b2dfbc',
            'green200' => '#8fd19e',
            'green300' => '#6dc381',
            'green400' => '#4ab563',
            'green500' => '#28a745',
            'green600' => '#228c3a',
            'green700' => '#1b722f',
            'green800' => '#155724',
            'green900' => '#0e3c19',

            'teal'    => '#20c997',
            'teal100' => '#afecda',
            'teal200' => '#8be3c9',
            'teal300' => '#67dab8',
            'teal400' => '#44d2a8',
            'teal500' => '#20c997',
            'teal600' => '#1ba97f',
            'teal700' => '#168967',
            'teal800' => '#11694f',
            'teal900' => '#0c4836',

            'cyan'    => '#17a2b8',
            'cyan100' => '#abdee5',
            'cyan200' => '#86cfda',
            'cyan300' => '#61c0cf',
            'cyan400' => '#3cb1c3',
            'cyan500' => '#17a2b8',
            'cyan600' => '#13889b',
            'cyan700' => '#106e7d',
            'cyan800' => '#0c5460',
            'cyan900' => '#083a42',

            'primary'   => '#007bff', // blue
            'secondary' => '#6c757d', // gray600
            'success'   => '#28a745', // green
            'info'      => '#17a2b8', // cyan
            'warning'   => '#ffc107', // yellow
            'danger'    => '#dc3545', // red
            'light'     => '#f8f9fa', // gray100
            'dark'      => '#212529', // gray900
        ],

        // Borders.
        'borders' => [
            'square' => [
                'top-left' => '┌',
                'top' => '─',
                'top-right' => '┐',
                'right' => '│',
                'left' => '│',
                'bottom-right' => '┘',
                'bottom' => '─',
                'bottom-left' => '└',
            ],
            'rounded' => [
                'top-left' => '╭',
                'top' => '─',
                'top-right' => '╮',
                'right' => '│',
                'left' => '│',
                'bottom-right' => '╯',
                'bottom' => '─',
                'bottom-left' => '╰',
            ],
            'double' => [
                'top-left' => '╔',
                'top' => '═',
                'top-right' => '╗',
                'right' => '║',
                'left' => '║',
                'bottom-right' => '╝',
                'bottom' => '═',
                'bottom-left' => '╚',
            ],
            'heavy' => [
                'top-left' => '┏',
                'top' => '━',
                'top-right' => '┓',
                'right' => '┃',
                'left' => '┃',
                'bottom-right' => '┛',
                'bottom' => '━',
                'bottom-left' => '┗',
            ],
        ],
        
        // Spacing.
        'spacer' => 1,

        // Alert element.
        'alert' => [
            'text-align' => 'left',
            'width-auto' => false,
            'width' => 50,
            'type' => [
                'info' => [
                    'bg' => 'info',
                    'color' => 'black',
                ],
                'warning' => [
                    'bg' => 'warning',
                    'color' => 'black',
                ],
                'danger' => [
                    'bg' => 'danger',
                    'color' => 'white',
                ],
                'success' => [
                    'bg' => 'success',
                    'color' => 'black',
                ],
                'primary' => [
                    'bg' => 'primary',
                    'color' => 'white',
                ],
                'secondary' => [
                    'bg' => 'secondary',
                    'color' => 'white',
                ],
            ],
        ],

        // Chart element.
        'chart' => [
            'text-align' => 'left',
            'border' => 'filled',
            'borders' => [
                'filled' => [
                    'top' => ' ',
                ],
                'thin' => [
                    'top' => '─',
                ],
                'double' => [
                    'top' => '═',
                ],
                'triple' => [
                    'top' => '≡',
                ],
                'heavy' => [
                    'top' => '━'
                ],
                'super-heavy' => [
                    'top' => '▬'
                ],
                'dashed' => [
                    'top' => '-',
                ],
                'rope' => [
                    'top' => '▱'
                ],
                'rope-heavy' => [
                    'top' => '▰'
                ],
                'brick' => [
                    'top' => '▭'
                ],
                'block-small' => [
                    'top' => '▫'
                ],
                'block-small-heavy' => [
                    'top' => '▪'
                ],
                'block' => [
                    'top' => '◻'
                ],
                'noise' => [
                    'top' => '▩'
                ],
            ],
        ],

        // Canvas element.
        'canvas' => [
            'width' => 16,
            'height' => 16,
            'pixel-width' => 3,
        ],
        
        // Hr element.
        'hr' => [
            'text-align' => 'left',
            'border' => 'thin',
            'borders' => [
                'thin' => [
                    'top' => '─',
                ],
                'double' => [
                    'top' => '═',
                ],
                'triple' => [
                    'top' => '≡',
                ],
                'heavy' => [
                    'top' => '━'
                ],
                'super-heavy' => [
                    'top' => '▬'
                ],
                'dashed' => [
                    'top' => '-',
                ],
                'arrow-down' => [
                    'top' => '▼'
                ],
                'arrow-up' => [
                    'top' => '▲'
                ],
                'wave' => [
                    'top' => '~'
                ],
                'rope' => [
                    'top' => '▱'
                ],
                'rope-heavy' => [
                    'top' => '▰'
                ],
                'brick' => [
                    'top' => '▭'
                ],
                'block-small' => [
                    'top' => '▫'
                ],
                'block-small-heavy' => [
                    'top' => '▪'
                ],
                'block' => [
                    'top' => '◻'
                ],
                'noise' => [
                    'top' => '▩'
                ],
            ],
        ],
    ]);
}
// ...
```

### Default theme colors

<div class="flex">
<div class="">
<div class="p-3 swatch-blue">
<strong class="d-block">blue</strong>
#007bff
</div>
<div class="p-3 bd-blue100">blue100</div>
<div class="p-3 bd-blue200">blue200</div>
<div class="p-3 bd-blue300">blue300</div>
<div class="p-3 bd-blue400">blue400</div>
<div class="p-3 bd-blue500">blue500</div>
<div class="p-3 bd-blue600">blue600</div>
<div class="p-3 bd-blue700">blue700</div>
<div class="p-3 bd-blue800">blue800</div>
<div class="p-3 bd-blue900">blue900</div>
</div>
<div class="">
<div class="p-3 swatch-indigo">
<strong class="d-block">indigo</strong>
#6610f2
</div>
<div class="p-3 bd-indigo100">indigo100</div>
<div class="p-3 bd-indigo200">indigo200</div>
<div class="p-3 bd-indigo300">indigo300</div>
<div class="p-3 bd-indigo400">indigo400</div>
<div class="p-3 bd-indigo500">indigo500</div>
<div class="p-3 bd-indigo600">indigo600</div>
<div class="p-3 bd-indigo700">indigo700</div>
<div class="p-3 bd-indigo800">indigo800</div>
<div class="p-3 bd-indigo900">indigo900</div>
</div>
<div class="">
<div class="p-3 swatch-purple">
<strong class="d-block">purple</strong>
#6f42c1
</div>
<div class="p-3 bd-purple100">purple100</div>
<div class="p-3 bd-purple200">purple200</div>
<div class="p-3 bd-purple300">purple300</div>
<div class="p-3 bd-purple400">purple400</div>
<div class="p-3 bd-purple500">purple500</div>
<div class="p-3 bd-purple600">purple600</div>
<div class="p-3 bd-purple700">purple700</div>
<div class="p-3 bd-purple800">purple800</div>
<div class="p-3 bd-purple900">purple900</div>
</div>
<div>
<div class="p-3 swatch-pink">
<strong class="d-block">pink</strong>
#e83e8c
</div>
<div class="p-3 bd-pink100">pink100</div>
<div class="p-3 bd-pink200">pink200</div>
<div class="p-3 bd-pink300">pink300</div>
<div class="p-3 bd-pink400">pink400</div>
<div class="p-3 bd-pink500">pink500</div>
<div class="p-3 bd-pink600">pink600</div>
<div class="p-3 bd-pink700">pink700</div>
<div class="p-3 bd-pink800">pink800</div>
<div class="p-3 bd-pink900">pink900</div>
</div>
<div>
<div class="p-3 swatch-red">
<strong class="d-block">red</strong>
#dc3545
</div>
<div class="p-3 bd-red100">red100</div>
<div class="p-3 bd-red200">red200</div>
<div class="p-3 bd-red300">red300</div>
<div class="p-3 bd-red400">red400</div>
<div class="p-3 bd-red500">red500</div>
<div class="p-3 bd-red600">red600</div>
<div class="p-3 bd-red700">red700</div>
<div class="p-3 bd-red800">red800</div>
<div class="p-3 bd-red900">red900</div>
</div>
<div>
<div class="p-3 swatch-orange">
<strong class="d-block">orange</strong>
#fd7e14
</div>
<div class="p-3 bd-orange100">orange100</div>
<div class="p-3 bd-orange200">orange200</div>
<div class="p-3 bd-orange300">orange300</div>
<div class="p-3 bd-orange400">orange400</div>
<div class="p-3 bd-orange500">orange500</div>
<div class="p-3 bd-orange600">orange600</div>
<div class="p-3 bd-orange700">orange700</div>
<div class="p-3 bd-orange800">orange800</div>
<div class="p-3 bd-orange900">orange900</div>
</div>
<div>
<div class="p-3 swatch-yellow">
<strong class="d-block">yellow</strong>
#ffc107
</div>
<div class="p-3 bd-yellow100">yellow100</div>
<div class="p-3 bd-yellow200">yellow200</div>
<div class="p-3 bd-yellow300">yellow300</div>
<div class="p-3 bd-yellow400">yellow400</div>
<div class="p-3 bd-yellow500">yellow500</div>
<div class="p-3 bd-yellow600">yellow600</div>
<div class="p-3 bd-yellow700">yellow700</div>
<div class="p-3 bd-yellow800">yellow800</div>
<div class="p-3 bd-yellow900">yellow900</div>
</div>
<div>
<div class="p-3 swatch-green">
<strong class="d-block">green</strong>
#28a745
</div>
<div class="p-3 bd-green100">green100</div>
<div class="p-3 bd-green200">green200</div>
<div class="p-3 bd-green300">green300</div>
<div class="p-3 bd-green400">green400</div>
<div class="p-3 bd-green500">green500</div>
<div class="p-3 bd-green600">green600</div>
<div class="p-3 bd-green700">green700</div>
<div class="p-3 bd-green800">green800</div>
<div class="p-3 bd-green900">green900</div>
</div>
<div>
<div class="p-3 swatch-teal">
<strong class="d-block">teal</strong>
#20c997
</div>
<div class="p-3 bd-teal100">teal100</div>
<div class="p-3 bd-teal200">teal200</div>
<div class="p-3 bd-teal300">teal300</div>
<div class="p-3 bd-teal400">teal400</div>
<div class="p-3 bd-teal500">teal500</div>
<div class="p-3 bd-teal600">teal600</div>
<div class="p-3 bd-teal700">teal700</div>
<div class="p-3 bd-teal800">teal800</div>
<div class="p-3 bd-teal900">teal900</div>
</div>
<div>
<div class="p-3 swatch-cyan">
<strong class="d-block">cyan</strong>
#17a2b8
</div>
<div class="p-3 bd-cyan100">cyan100</div>
<div class="p-3 bd-cyan200">cyan200</div>
<div class="p-3 bd-cyan300">cyan300</div>
<div class="p-3 bd-cyan400">cyan400</div>
<div class="p-3 bd-cyan500">cyan500</div>
<div class="p-3 bd-cyan600">cyan600</div>
<div class="p-3 bd-cyan700">cyan700</div>  
<div class="p-3 bd-cyan800">cyan800</div>
<div class="p-3 bd-cyan900">cyan900</div>
</div>
</div>
<br><br>

If the terminal doesn’t support true colors, the nearest named color is used.  
E.g. <span style="color: #c0392b;">#c0392b</span> is degraded to <span style="color: red;">red</span> or <span style="color: #f1c40f;">#f1c40f</span> is degraded to <span style="color: yellow;">yellow</span>.

By default, the Windows command console doesn't support output coloring. The Console component disables output coloring for Windows systems, but if your commands invoke other scripts which emit color sequences, they will be wrongly displayed as raw escape characters. Install the [Cmder](https://cmder.net/), [ConEmu](https://conemu.github.io/), [ANSICON](https://github.com/adoxa/ansicon/), [Mintty](https://mintty.github.io/) (used by default in GitBash and Cygwin) or [Hyper](https://hyper.is/) free applications to add coloring support to your Windows command console.

### Create theme

```php 
<?php

declare(strict_types=1);

use Atomastic\Arrays\Arrays as Collection;
use Thermage\Themes\Theme;
use Thermage\Themes\ThemeInterface;

use function arrays as collection;

final class RadTheme extends Theme implements ThemeInterface
{
    public function getThemeVariables(): Collection
    {
        return collection([]);
    }
}
```

### Set theme

```php 
use Thermage\Thermage;

// ... 

Thermage::setTheme(new RadTheme());
```