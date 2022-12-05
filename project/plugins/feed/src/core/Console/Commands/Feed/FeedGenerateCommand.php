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

namespace Flextype\Plugin\Feed\Console\Commands\Feed;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use function Thermage\div;
use function Thermage\renderToString;
use function Flextype\registry;
use function Flextype\entries;
use function Glowy\Filesystem\filesystem;
use function Glowy\Strings\strings;
use function Flextype\Plugin\Twig\twig;

class FeedGenerateCommand extends Command
{
    protected function configure(): void
    {
        $this->setName('feed:generate');
        $this->setDescription('Generate feed.');
        $this->addOption('path', null, InputOption::VALUE_REQUIRED, 'Destination for generated static feed file (without trailing and without starting slash)');
        $this->addOption('site-url', null, InputOption::VALUE_REQUIRED, 'Sit url (without trailing slash).');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $elapsedTimeStartPoint = microtime(true);

        $result = Command::SUCCESS;
       
        $feedPath = $input->getOption('path') ? $input->getOption('path') : registry()->get('plugins.feed.settings.static.path');

        $staticFeedPath = FLEXTYPE_ROOT_DIR . '/' . $feedPath;
      
        if ($input->getOption('site-url')) {
            registry()->set('flextype.settings.base_url', $input->getOption('site-url'));
            registry()->set('flextype.settings.base_path', '');
        } else {
            registry()->set('flextype.settings.base_url', registry()->get('plugins.feed.settings.static.site_url'));
            registry()->set('flextype.settings.base_path', '');
        }

       $feeds = registry()->get('plugins.feed.settings.feeds');

        if (is_array($feeds) && count($feeds) > 0) {

            // Start site generation process...
            $output->write(
                renderToString(
                    div('Feeds generation...', 
                        'px-2 pt-1 pb-1')
                )
            );

            foreach ($feeds as $feed) {

                $entries = entries()->fetch($feed['id'], $feed['options'])->sortBy('published_at', 'DESC');

                switch ($feed['options']['feed']['format']) {
                    case 'rss':
                        $template =  isset($feed['options']['feed']['template']) ? $feed['options']['feed']['template'] : 'plugins/feed/views/templates/feed.rss.html';
                        break;
                    case 'atom':
                        $template = isset($feed['options']['feed']['template']) ? $feed['options']['feed']['template'] : 'plugins/feed/views/templates/feed.atom.html';
                        break;
                    case 'json':
                    default:
                        $template = isset($feed['options']['feed']['template']) ? $feed['options']['feed']['template'] : 'plugins/feed/views/templates/feed.json.html';
                        break;
                }

                $filePath = strings($staticFeedPath . '/' . $feed['options']['feed']['route'])->reduceSlashes()->toString();
                $desinationDirectory = dirname($filePath);
                $destinationFile = $filePath;

                filesystem()->directory($desinationDirectory)->ensureExists(0755, true);

                $saveResult = filesystem()->file($destinationFile)->put(twig()->fetch($template, ['entries' => $entries, 'feed' => $feed]));

                if ($saveResult) {
                    $output->write(
                        renderToString(
                            div('Feed ' . strings($feedPath . '/' . $feed['options']['feed']['route'])->reduceSlashes()->trim('/') . ' generated successfully.', 
                                'color-success px-2')
                        )
                    );
                } else {
                    $output->write(
                        renderToString(
                            div('Feed ' . $feed['options']['feed']['route'] . ' was not generated.', 
                                'color-danger px-2')
                        )
                    );

                    return Command::FAILURE;
                }
            }   
        }

        $output->write(
            renderToString(
                div('Feeds generated in [b]'. sprintf("%01.4f", microtime(true) - $elapsedTimeStartPoint) .'[/b] seconds.', 'px-2 pt-1 pb-1')
            )
        );

        return Command::SUCCESS;
    }
}