---
title: getShortcodes
template: thermage/documentation/element
description: Get Paragraph element shortcodes instance.
seo:
  title: Get Paragraph element shortcodes instance. | getShortcodes
  description: You may get Paragraph element shortcodes instance with help of method getShortcodes
---

```php
/**
 * Get Paragraph element shortcodes instance.
 *
 * @return Shortcodes Paragraph element shortcodes instance.
 *
 * @access public
 */
public static function getShortcodes(): Shortcodes
```

#### Examples

```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

$shortcodes = paragraph()::getShortcodes();
```