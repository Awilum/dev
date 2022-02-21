---
title: setShortcodes
template: thermage/documentation/element
description: Set Anchor element shortcodes instance.
seo:
  title: Set Anchor element shortcodes instance. | setShortcodes
  description: You may get Anchor element shortcodes instance with help of method setShortcodes
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
use function Thermage\anchor;
use function Thermage\render;

// ...

anchor()::setShortcodes(new Shortcodes());
```