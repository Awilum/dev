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

namespace Flextype\Plugin\DocsCrawler\Console\Commands\DocsParsers;

use League\HTMLToMarkdown\HtmlConverter;
use League\HTMLToMarkdown\Converter\TableConverter;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use function Thermage\div;
use function Thermage\renderToString;
use function Flextype\registry;
use function Flextype\entries;
use function Flextype\fetch;
use function Glowy\Filesystem\filesystem;
use function Glowy\Strings\strings;
use function Flextype\Plugin\Twig\twig;

class TailwindcssParserCommand extends Command
{
    protected function configure(): void
    {
        $this->setName('docs:parse-tailwindcss');
        $this->setDescription('Parse docs.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $elapsedTimeStartPoint = microtime(true);

        $result = Command::SUCCESS;
/*
$doc = new \DOMDocument();
@$doc->loadHTML(fetch('https://tailwindcss.com/docs/installation')['body']); 
$xpath = new \DOMXpath($doc);
$nodes = $xpath->query('/html/body//a');
$l = [];
foreach($nodes as $node) {
    if (strings($node->getAttribute('href'))->contains('docs')) {
        echo 'https://tailwindcss.com' . $node->getAttribute('href') . "\n";
    }
}
dd();*/
        $links = <<<EOF
        https://tailwindcss.com/docs/responsive-design
        https://tailwindcss.com/docs/aspect-ratio
        https://tailwindcss.com/docs/container
        https://tailwindcss.com/docs/columns
        https://tailwindcss.com/docs/break-after
        https://tailwindcss.com/docs/break-before
        https://tailwindcss.com/docs/break-inside
        https://tailwindcss.com/docs/box-decoration-break
        https://tailwindcss.com/docs/box-sizing
        https://tailwindcss.com/docs/display
        https://tailwindcss.com/docs/float
        https://tailwindcss.com/docs/clear
        https://tailwindcss.com/docs/isolation
        https://tailwindcss.com/docs/object-fit
        https://tailwindcss.com/docs/object-position
        https://tailwindcss.com/docs/overflow
        https://tailwindcss.com/docs/overscroll-behavior
        https://tailwindcss.com/docs/position
        https://tailwindcss.com/docs/top-right-bottom-left
        https://tailwindcss.com/docs/visibility
        https://tailwindcss.com/docs/z-index
        https://tailwindcss.com/docs/flex-basis
        https://tailwindcss.com/docs/flex-direction
        https://tailwindcss.com/docs/flex-wrap
        https://tailwindcss.com/docs/flex
        https://tailwindcss.com/docs/flex-grow
        https://tailwindcss.com/docs/flex-shrink
        https://tailwindcss.com/docs/order
        https://tailwindcss.com/docs/grid-template-columns
        https://tailwindcss.com/docs/grid-column
        https://tailwindcss.com/docs/grid-template-rows
        https://tailwindcss.com/docs/grid-row
        https://tailwindcss.com/docs/grid-auto-flow
        https://tailwindcss.com/docs/grid-auto-columns
        https://tailwindcss.com/docs/grid-auto-rows
        https://tailwindcss.com/docs/gap
        https://tailwindcss.com/docs/justify-content
        https://tailwindcss.com/docs/justify-items
        https://tailwindcss.com/docs/justify-self
        https://tailwindcss.com/docs/align-content
        https://tailwindcss.com/docs/align-items
        https://tailwindcss.com/docs/align-self
        https://tailwindcss.com/docs/place-content
        https://tailwindcss.com/docs/place-items
        https://tailwindcss.com/docs/place-self
        https://tailwindcss.com/docs/padding
        https://tailwindcss.com/docs/margin
        https://tailwindcss.com/docs/space
        https://tailwindcss.com/docs/width
        https://tailwindcss.com/docs/min-width
        https://tailwindcss.com/docs/max-width
        https://tailwindcss.com/docs/height
        https://tailwindcss.com/docs/min-height
        https://tailwindcss.com/docs/max-height
        https://tailwindcss.com/docs/font-family
        https://tailwindcss.com/docs/font-size
        https://tailwindcss.com/docs/font-smoothing
        https://tailwindcss.com/docs/font-style
        https://tailwindcss.com/docs/font-weight
        https://tailwindcss.com/docs/font-variant-numeric
        https://tailwindcss.com/docs/letter-spacing
        https://tailwindcss.com/docs/line-height
        https://tailwindcss.com/docs/list-style-type
        https://tailwindcss.com/docs/list-style-position
        https://tailwindcss.com/docs/text-align
        https://tailwindcss.com/docs/text-color
        https://tailwindcss.com/docs/text-decoration
        https://tailwindcss.com/docs/text-decoration-color
        https://tailwindcss.com/docs/text-decoration-style
        https://tailwindcss.com/docs/text-decoration-thickness
        https://tailwindcss.com/docs/text-underline-offset
        https://tailwindcss.com/docs/text-transform
        https://tailwindcss.com/docs/text-overflow
        https://tailwindcss.com/docs/text-indent
        https://tailwindcss.com/docs/vertical-align
        https://tailwindcss.com/docs/whitespace
        https://tailwindcss.com/docs/word-break
        https://tailwindcss.com/docs/content
        https://tailwindcss.com/docs/background-attachment
        https://tailwindcss.com/docs/background-clip
        https://tailwindcss.com/docs/background-color
        https://tailwindcss.com/docs/background-origin
        https://tailwindcss.com/docs/background-position
        https://tailwindcss.com/docs/background-repeat
        https://tailwindcss.com/docs/background-size
        https://tailwindcss.com/docs/background-image
        https://tailwindcss.com/docs/gradient-color-stops
        https://tailwindcss.com/docs/border-radius
        https://tailwindcss.com/docs/border-width
        https://tailwindcss.com/docs/border-color
        https://tailwindcss.com/docs/border-style
        https://tailwindcss.com/docs/divide-width
        https://tailwindcss.com/docs/divide-color
        https://tailwindcss.com/docs/divide-style
        https://tailwindcss.com/docs/outline-width
        https://tailwindcss.com/docs/outline-color
        https://tailwindcss.com/docs/outline-style
        https://tailwindcss.com/docs/outline-offset
        https://tailwindcss.com/docs/ring-width
        https://tailwindcss.com/docs/ring-color
        https://tailwindcss.com/docs/ring-offset-width
        https://tailwindcss.com/docs/ring-offset-color
        https://tailwindcss.com/docs/box-shadow
        https://tailwindcss.com/docs/box-shadow-color
        https://tailwindcss.com/docs/opacity
        https://tailwindcss.com/docs/mix-blend-mode
        https://tailwindcss.com/docs/background-blend-mode
        https://tailwindcss.com/docs/blur
        https://tailwindcss.com/docs/brightness
        https://tailwindcss.com/docs/contrast
        https://tailwindcss.com/docs/drop-shadow
        https://tailwindcss.com/docs/grayscale
        https://tailwindcss.com/docs/hue-rotate
        https://tailwindcss.com/docs/invert
        https://tailwindcss.com/docs/saturate
        https://tailwindcss.com/docs/sepia
        https://tailwindcss.com/docs/backdrop-blur
        https://tailwindcss.com/docs/backdrop-brightness
        https://tailwindcss.com/docs/backdrop-contrast
        https://tailwindcss.com/docs/backdrop-grayscale
        https://tailwindcss.com/docs/backdrop-hue-rotate
        https://tailwindcss.com/docs/backdrop-invert
        https://tailwindcss.com/docs/backdrop-opacity
        https://tailwindcss.com/docs/backdrop-saturate
        https://tailwindcss.com/docs/backdrop-sepia
        https://tailwindcss.com/docs/border-collapse
        https://tailwindcss.com/docs/border-spacing
        https://tailwindcss.com/docs/table-layout
        https://tailwindcss.com/docs/transition-property
        https://tailwindcss.com/docs/transition-duration
        https://tailwindcss.com/docs/transition-timing-function
        https://tailwindcss.com/docs/transition-delay
        https://tailwindcss.com/docs/animation
        https://tailwindcss.com/docs/scale
        https://tailwindcss.com/docs/rotate
        https://tailwindcss.com/docs/translate
        https://tailwindcss.com/docs/skew
        https://tailwindcss.com/docs/transform-origin
        https://tailwindcss.com/docs/accent-color
        https://tailwindcss.com/docs/appearance
        https://tailwindcss.com/docs/cursor
        https://tailwindcss.com/docs/caret-color
        https://tailwindcss.com/docs/pointer-events
        https://tailwindcss.com/docs/resize
        https://tailwindcss.com/docs/scroll-behavior
        https://tailwindcss.com/docs/scroll-margin
        https://tailwindcss.com/docs/scroll-padding
        https://tailwindcss.com/docs/scroll-snap-align
        https://tailwindcss.com/docs/scroll-snap-stop
        https://tailwindcss.com/docs/scroll-snap-type
        https://tailwindcss.com/docs/touch-action
        https://tailwindcss.com/docs/user-select
        https://tailwindcss.com/docs/will-change
        https://tailwindcss.com/docs/fill
        https://tailwindcss.com/docs/stroke
        https://tailwindcss.com/docs/stroke-width
        https://tailwindcss.com/docs/screen-readers
        https://tailwindcss.com/docs/typography-plugin
        EOF;

        $converter = new HtmlConverter();
        $converter->getEnvironment()->addConverter(new TableConverter());

        $result = '';

        echo 'Total links: ' . (count(strings($links)->toArray("\n"))) . "\n";

        foreach(strings($links)->toArray("\n") as $link) {

            $doc = fetch($link)['body'];
            
            preg_match("#<\s*?table\b[^>]*>(.*?)</table\b[^>]*>#s", $doc, $matches);
            $table = '<table>' . (isset($matches[1]) ? $matches[1] : '') . '</table>';

            preg_match("#<\s*?h1\b[^>]*>(.*?)</h1\b[^>]*>#s", $doc, $matches);
            $heading = isset($matches[1]) ? $matches[1] : '';
       
            $result .= '### [' . $heading . "]($link) \n" . str_replace([
                                '`',
                                '<i class="f:fade f:gray-70@dark">', 
                                '</i>',
                                '<span class="token property">',
                                '<span class="token punctuation">',
                                '</span>',
                                '<span class="token function">',
                                '<span class="token url">',
                                '<div class="py-2 pr-2 border-b border-slate-200 dark:border-slate-400/20">',
                                '</div>'
                            ],
                            [''], $converter->convert($table)) . "\n\n";

             
            echo $heading . ' - parsed' . "\n";
        }

        entries()->update('cheatsheets/tailwindcss', ['content' => $result]);

        return Command::SUCCESS;
    }
}