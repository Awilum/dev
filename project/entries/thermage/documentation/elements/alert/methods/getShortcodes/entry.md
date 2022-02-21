---
title: getShortcodes
template: thermage/documentation/element
description: Get Alert element shortcodes instance.
seo:
  title: Get Alert element shortcodes instance. | getShortcodes
  description: You may get Alert element shortcodes instance with help of method getShortcodes
---

```php
/**
 * Get Alert element shortcodes instance.
 *
 * @return Shortcodes Alert element shortcodes instance.
 *
 * @access public
 */
public static function getShortcodes(): Shortcodes
```

#### Examples

```php
use function Thermage\alert;
use function Thermage\render;

// ...

$shortcodes = alert()::getShortcodes();
```