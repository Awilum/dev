---
title: getShortcodes
template: thermage/documentation/element
description: Get Anchor element shortcodes instance.
seo:
  title: Get Anchor element shortcodes instance. | getShortcodes
  description: You may get Anchor element shortcodes instance with help of method getShortcodes
---

```php
/**
 * Get Anchor element shortcodes instance.
 *
 * @return Shortcodes Anchor element shortcodes instance.
 *
 * @access public
 */
public static function getShortcodes(): Shortcodes
```

#### Examples

```php
use function Thermage\anchor;
use function Thermage\render;

// ...

$shortcodes = anchor()::getShortcodes();
```