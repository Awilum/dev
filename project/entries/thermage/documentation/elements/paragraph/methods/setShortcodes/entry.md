---
title: setShortcodes
template: thermage/documentation/element
description: Set Paragraph element shortcodes instance.
seo:
  title: Set Paragraph element shortcodes instance. | setShortcodes
  description: You may get Paragraph element shortcodes instance with help of method setShortcodes
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
use function Thermage\paragraph;
use function Thermage\render;

// ...

paragraph()::setShortcodes(new Shortcodes());
```