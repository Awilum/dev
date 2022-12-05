<?php

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

use function Flextype\parsers;
use function Flextype\registry;
use function Glowy\Filesystem\filesystem;

parsers()->shortcodes()->addHandler('div', static function (ShortcodeInterface $s) {
    return '<div class="' . $s->getParameter('class') . '">' . parsers()->markdown()->parse($s->getContent()) . '</div>';
});

parsers()->shortcodes()->addHandler('a', static function (ShortcodeInterface $s) {
    return '<a href="'.$s->getParameter('href').'" class="' . $s->getParameter('class') . '">' . parsers()->markdown()->parse($s->getContent()) . '</a>';
});

parsers()->shortcodes()->addHandler('html', static function (ShortcodeInterface $s) {
    return htmlentities($s->getContent());
});

parsers()->shortcodes()->addHandler('getBlocksCount', static function (ShortcodeInterface $s) {
    $category = $s->getParameter('category');
    
    if (! filesystem()->directory(FLEXTYPE_PATH_PROJECT . '/entries/masterblocks/' . $category)->exists()) {
        return 0;
    }

    return count(iterator_to_array(filesystem()->find()->name($category . '-block-*')->in(FLEXTYPE_PATH_PROJECT . '/entries/masterblocks/' . $category)->files(), false));
});



