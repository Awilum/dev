---
title: getShortcodes
template: thermage/documentation/element
description: Get Span element shortcodes instance.
seo:
  title: Get Span element shortcodes instance. | getShortcodes
  description: You may get Span element shortcodes instance with help of method getShortcodes
---

```php
/**
 * Get Span element shortcodes instance.
 *
 * @return Shortcodes Span element shortcodes instance.
 *
 * @access public
 */
public static function getShortcodes(): Shortcodes
```

#### Examples

```php
use function Thermage\span;
use function Thermage\render;

// ...

$shortcodes = span()::getShortcodes();
```