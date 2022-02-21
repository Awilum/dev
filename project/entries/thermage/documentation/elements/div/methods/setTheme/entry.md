---
title: setTheme
template: thermage/documentation/element
description: Set Div element theme instance.
seo:
  title: Set Div element theme instance. | setTheme
  description: You may set Div element theme instance with help of method setTheme
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
use function Thermage\div;
use function Thermage\render;

// ...

div()::setTheme(new RadTheme());
```