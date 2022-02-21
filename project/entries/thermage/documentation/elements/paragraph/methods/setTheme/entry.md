---
title: setTheme
template: thermage/documentation/element
description: Set Paragraph element theme instance.
seo:
  title: Set Paragraph element theme instance. | setTheme
  description: You may set Paragraph element theme instance with help of method setTheme
---

```php
/**
 * Set a new instance of the theme that implements Themes interface.
 *
 * @param ThemeInterface $theme Theme interface.
 *
 * @return void
 *
 * @access public
 */
public static function setTheme(ThemeInterface $theme): void
```

#### Examples

```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

paragraph()::setTheme(new RadTheme());
```