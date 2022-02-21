---
title: getShortcodes
template: thermage/documentation/element
description: Get Hr element shortcodes instance.
seo:
  title: Get Hr element shortcodes instance. | getShortcodes
  description: You may get Hr element shortcodes instance with help of method getShortcodes
---

```php
/**
 * Get Hr element shortcodes instance.
 *
 * @return Shortcodes Hr element shortcodes instance.
 *
 * @access public
 */
public static function getShortcodes(): Shortcodes
```

#### Examples

```php
use function Thermage\hr;
use function Thermage\render;

// ...

$shortcodes = hr()::getShortcodes();
```