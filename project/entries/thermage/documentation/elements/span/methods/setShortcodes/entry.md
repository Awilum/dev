---
title: setShortcodes
template: thermage/documentation/element
description: Set Span element shortcodes instance.
seo:
  title: Set Span element shortcodes instance. | setShortcodes
  description: You may get Span element shortcodes instance with help of method setShortcodes
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
use function Thermage\span;
use function Thermage\render;

// ...

span()::setShortcodes(new Shortcodes());
```