---
title: getShortcodes
template: thermage/documentation/element
description: Get Div element shortcodes instance.
seo:
  title: Get Div element shortcodes instance. | getShortcodes
  description: You may get Div element shortcodes instance with help of method getShortcodes
---

```php
/**
 * Get Div element shortcodes instance.
 *
 * @return Shortcodes Div element shortcodes instance.
 *
 * @access public
 */
public static function getShortcodes(): Shortcodes
```

#### Examples

```php
use function Thermage\div;
use function Thermage\render;

// ...

$shortcodes = div()::getShortcodes();
```