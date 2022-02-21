---
title: setShortcodes
template: thermage/documentation/element
description: Set Alert element shortcodes instance.
seo:
  title: Set Alert element shortcodes instance. | setShortcodes
  description: You may get Alert element shortcodes instance with help of method setShortcodes
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
use function Thermage\alert;
use function Thermage\render;

// ...

alert()::setShortcodes(new Shortcodes());
```