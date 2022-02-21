---
title: setShortcodes
template: thermage/documentation/element
description: Set Heading element shortcodes instance.
seo:
  title: Set Heading element shortcodes instance. | setShortcodes
  description: You may get Heading element shortcodes instance with help of method setShortcodes
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
use function Thermage\heading;
use function Thermage\render;

// ...

heading()::setShortcodes(new Shortcodes());
```