---
title: addEvent
template: thermage/documentation/shortcodes
description: Add shortcode event handler.
seo:
  title: Add shortcode event handler. | addEvent
  description: You may add shortcode event handler with help of method addEvent
---

```php
/**
 * Add event handler.
 *
 * @param string   $name    Shortcode event name.
 * @param callable $handler Shortcode event handler.
 *
 * @return self Returns instance of the Shortcodes class.
 *
 * @access public
 */
public function addEvent(string $name, callable $handler): self
```

#### Examples

```php
use Thermage\Thermage;
use Thunder\Shortcode\Events;
use Thunder\Shortcode\EventHandler\FilterRawEventHandler;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

$shortcodes = Thermage::getShortcodes();

// shortcode: [raw][b]Stay RAD![/b][/raw]
$shortcodes->add('raw', function (ShortcodeInterface $s) {
    return $s->getContent();
});

$shortcodes->addEventHandler(Events::FILTER_SHORTCODES, new FilterRawEventHandler(['raw']));
```

[> Read more about events](https://github.com/thunderer/Shortcode#events)
