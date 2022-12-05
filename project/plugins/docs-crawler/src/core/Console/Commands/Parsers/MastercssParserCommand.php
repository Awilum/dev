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

class MastercssParserCommand extends Command
{
    protected function configure(): void
    {
        $this->setName('docs:parse-mastercss');
        $this->setDescription('Parse docs.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $elapsedTimeStartPoint = microtime(true);

        $result = Command::SUCCESS;

        $links = <<<EOF
        https://docs.master.co/css/appearance
        https://docs.master.co/css/accent-color
        https://docs.master.co/css/caret-color
        https://docs.master.co/css/cursor
        https://docs.master.co/css/box-decoration-break
        https://docs.master.co/css/break-after
        https://docs.master.co/css/break-before
        https://docs.master.co/css/break-inside
        https://docs.master.co/css/clear
        https://docs.master.co/css/columns
        https://docs.master.co/css/column-span
        https://docs.master.co/css/direction
        https://docs.master.co/css/display
        https://docs.master.co/css/float
        https://docs.master.co/css/inset
        https://docs.master.co/css/isolation
        https://docs.master.co/css/overflow
        https://docs.master.co/css/position
        https://docs.master.co/css/z-index
        https://docs.master.co/css/flex
        https://docs.master.co/css/flex-basis
        https://docs.master.co/css/flex-direction
        https://docs.master.co/css/flex-grow
        https://docs.master.co/css/flex-shrink
        https://docs.master.co/css/flex-wrap
        https://docs.master.co/css/grid
        https://docs.master.co/css/grid-auto-columns
        https://docs.master.co/css/grid-auto-flow
        https://docs.master.co/css/grid-auto-rows
        https://docs.master.co/css/grid-column
        https://docs.master.co/css/grid-columns
        https://docs.master.co/css/grid-row
        https://docs.master.co/css/grid-rows
        https://docs.master.co/css/grid-template
        https://docs.master.co/css/grid-template-areas
        https://docs.master.co/css/grid-template-columns
        https://docs.master.co/css/grid-template-rows
        https://docs.master.co/css/align-content
        https://docs.master.co/css/align-items
        https://docs.master.co/css/align-self
        https://docs.master.co/css/gap
        https://docs.master.co/css/justify-content
        https://docs.master.co/css/justify-items
        https://docs.master.co/css/justify-self
        https://docs.master.co/css/order
        https://docs.master.co/css/place-content
        https://docs.master.co/css/place-items
        https://docs.master.co/css/place-self
        https://docs.master.co/css/border-collapse
        https://docs.master.co/css/table-layout
        https://docs.master.co/css/object-fit
        https://docs.master.co/css/object-position
        https://docs.master.co/css/font
        https://docs.master.co/css/font-color
        https://docs.master.co/css/font-family
        https://docs.master.co/css/font-size
        https://docs.master.co/css/font-style
        https://docs.master.co/css/font-variant-numeric
        https://docs.master.co/css/font-weight
        https://docs.master.co/css/font-smoothing
        https://docs.master.co/css/text-align
        https://docs.master.co/css/text-decoration
        https://docs.master.co/css/text-decoration-color
        https://docs.master.co/css/text-decoration-line
        https://docs.master.co/css/text-decoration-style
        https://docs.master.co/css/text-decoration-thickness
        https://docs.master.co/css/text-fill-color
        https://docs.master.co/css/text-indent
        https://docs.master.co/css/text-orientation
        https://docs.master.co/css/text-overflow
        https://docs.master.co/css/text-shadow
        https://docs.master.co/css/text-size
        https://docs.master.co/css/text-stroke
        https://docs.master.co/css/text-stroke-color
        https://docs.master.co/css/text-stroke-width
        https://docs.master.co/css/text-transform
        https://docs.master.co/css/text-underline-offset
        https://docs.master.co/css/text-rendering
        https://docs.master.co/css/list-style
        https://docs.master.co/css/list-style-image
        https://docs.master.co/css/list-style-position
        https://docs.master.co/css/list-style-type
        https://docs.master.co/css/letter-spacing
        https://docs.master.co/css/line-clamp
        https://docs.master.co/css/line-height
        https://docs.master.co/css/content
        https://docs.master.co/css/vertical-align
        https://docs.master.co/css/white-space
        https://docs.master.co/css/word-break
        https://docs.master.co/css/word-spacing
        https://docs.master.co/css/writing-mode
        https://docs.master.co/css/background
        https://docs.master.co/css/backdrop-filter
        https://docs.master.co/css/background-attachment
        https://docs.master.co/css/background-blend-mode
        https://docs.master.co/css/background-clip
        https://docs.master.co/css/background-color
        https://docs.master.co/css/background-image
        https://docs.master.co/css/background-origin
        https://docs.master.co/css/background-position
        https://docs.master.co/css/background-repeat
        https://docs.master.co/css/background-size
        https://docs.master.co/css/border
        https://docs.master.co/css/border-color
        https://docs.master.co/css/border-style
        https://docs.master.co/css/border-width
        https://docs.master.co/css/border-radius
        https://docs.master.co/css/outline
        https://docs.master.co/css/outline-color
        https://docs.master.co/css/outline-offset
        https://docs.master.co/css/outline-style
        https://docs.master.co/css/outline-width
        https://docs.master.co/css/shape-image-threshold
        https://docs.master.co/css/shape-margin
        https://docs.master.co/css/shape-outside
        https://docs.master.co/css/clip-path
        https://docs.master.co/css/aspect-ratio
        https://docs.master.co/css/box-sizing
        https://docs.master.co/css/width
        https://docs.master.co/css/min-width
        https://docs.master.co/css/max-width
        https://docs.master.co/css/height
        https://docs.master.co/css/min-height
        https://docs.master.co/css/max-height
        https://docs.master.co/css/gap
        https://docs.master.co/css/letter-spacing
        https://docs.master.co/css/margin
        https://docs.master.co/css/padding
        https://docs.master.co/css/word-spacing
        https://docs.master.co/css/transition
        https://docs.master.co/css/transition-delay
        https://docs.master.co/css/transition-duration
        https://docs.master.co/css/transition-property
        https://docs.master.co/css/transition-timing-function
        https://docs.master.co/css/transform
        https://docs.master.co/css/transform-box
        https://docs.master.co/css/transform-origin
        https://docs.master.co/css/transform-style
        https://docs.master.co/css/animation
        https://docs.master.co/css/animation-delay
        https://docs.master.co/css/animation-direction
        https://docs.master.co/css/animation-duration
        https://docs.master.co/css/animation-fill-mode
        https://docs.master.co/css/animation-iteration-count
        https://docs.master.co/css/animation-name
        https://docs.master.co/css/animation-play-state
        https://docs.master.co/css/animation-timing-function
        https://docs.master.co/css/fill
        https://docs.master.co/css/stroke
        https://docs.master.co/css/stroke-width
        https://docs.master.co/css/visibility
        https://docs.master.co/css/opacity
        https://docs.master.co/css/backdrop-filter
        https://docs.master.co/css/background-blend-mode
        https://docs.master.co/css/box-shadow
        https://docs.master.co/css/filter
        https://docs.master.co/css/mask-image
        https://docs.master.co/css/mix-blend-mode
        https://docs.master.co/css/text-shadow
        https://docs.master.co/css/overscroll-behavior
        https://docs.master.co/css/scroll-behavior
        https://docs.master.co/css/scroll-margin
        https://docs.master.co/css/scroll-padding
        https://docs.master.co/css/scroll-snap-align
        https://docs.master.co/css/scroll-snap-stop
        https://docs.master.co/css/scroll-snap-type
        https://docs.master.co/css/pointer-events
        https://docs.master.co/css/resize
        https://docs.master.co/css/touch-action
        https://docs.master.co/css/user-drag
        https://docs.master.co/css/user-select
        https://docs.master.co/css/screen-readers
        https://docs.master.co/css/contain
        https://docs.master.co/css/font-smoothing
        https://docs.master.co/css/text-rendering
        https://docs.master.co/css/will-change
        https://docs.master.co/css/variable
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
                                '<span class="token url">'
                            ],
                            [''], $converter->convert($table)) . "\n\n";

             
            echo $heading . ' - parsed' . "\n";
        }

        entries()->update('cheatsheets/mastercss', ['content' => $result]);

        return Command::SUCCESS;
    }
}