---
title: setShortcodes
template: thermage/documentation/element
description: Set Chart element shortcodes instance.
seo:
  title: Set Chart element shortcodes instance. | setShortcodes
  description: You may get Chart element shortcodes instance with help of method setShortcodes
---

```php
/**
 * Set a new instance of the shortcodes.
 *
 * @param Shortcodes $shortcodes Shortcodes.
 *
 * @return void
 *
 * @access public
 */
public static function setShortcodes($shortcodes): void
```

#### Examples

```php
use function Thermage\chart;
use function Thermage\render;

// ...

render(
  chart()::setShortcodes(new Shortcodes())
);
```