---
title: setShortcodes
template: thermage/documentation/element
description: Set Div element shortcodes instance.
seo:
  title: Set Div element shortcodes instance. | setShortcodes
  description: You may get Div element shortcodes instance with help of method setShortcodes
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
use function Thermage\div;
use function Thermage\render;

// ...

div()::setShortcodes(new Shortcodes());
```