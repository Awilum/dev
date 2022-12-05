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

use Glowy\Arrays\Arrays as Collection;
use function Glowy\Strings\strings;
use function Flextype\entries;
use function Flextype\registry;
use function Flextype\emitter;
use function Flextype\Plugin\Twig\twig;

// Directive: @twig
emitter()->addListener('onEntriesFetchSingleField', static function (): void {

    if (! registry()->get('plugins.twig.settings.entries.directives.twig.enabled')) {
        return;
    }

    $field = entries()->registry()->get('methods.fetch.field');

    if (is_string($field['value'])) {
        if (strings($field['value'])->contains('@twig')) {
            $field['value'] = strings($field['value'])->replace('@twig', '')->trim()->toString();
            $field['value'] = twig()->fetchFromString($field['value'], []);
        } elseif (registry()->get('plugins.twig.settings.entries.directives.twig.enabled_globally')) {
            $field['value'] = twig()->fetchFromString($field['value'], []);
        }
    }

    entries()->registry()->set('methods.fetch.field.key', $field['key']);
    entries()->registry()->set('methods.fetch.field.value', $field['value']);
});