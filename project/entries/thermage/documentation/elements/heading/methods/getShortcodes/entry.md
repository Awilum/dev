---
title: getShortcodes
template: thermage/documentation/element
description: Get Heading element shortcodes instance.
seo:
  title: Get Heading element shortcodes instance. | getShortcodes
  description: You may get Heading element shortcodes instance with help of method getShortcodes
---

```php
/**
 * Get Heading element shortcodes instance.
 *
 * @return Shortcodes Heading element shortcodes instance.
 *
 * @access public
 */
public static function getShortcodes(): Shortcodes
```

#### Examples

```php
use function Thermage\heading;
use function Thermage\render;

// ...

$shortcodes = heading()::getShortcodes();
```