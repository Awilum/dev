---
title: getShortcodes
template: thermage/documentation/element
description: Get Chart element shortcodes instance.
seo:
  title: Get Chart element shortcodes instance. | getShortcodes
  description: You may get Chart element shortcodes instance with help of method getShortcodes
---

```php
/**
 * Get Chart element shortcodes instance.
 *
 * @return Shortcodes Chart element shortcodes instance.
 *
 * @access public
 */
public static function getShortcodes(): Shortcodes
```

#### Examples

```php
use function Thermage\chart;
use function Thermage\render;

// ...

$shortcodes = chart()::getShortcodes();
```