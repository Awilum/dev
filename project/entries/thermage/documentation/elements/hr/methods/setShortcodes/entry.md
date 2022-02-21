---
title: setShortcodes
template: thermage/documentation/element
description: Set Hr element shortcodes instance.
seo:
  title: Set Hr element shortcodes instance. | setShortcodes
  description: You may get Hr element shortcodes instance with help of method setShortcodes
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
use function Thermage\hr;
use function Thermage\render;

// ...

hr()::setShortcodes(new Shortcodes());
```