---
title: setTheme
template: thermage/documentation/element
description: Set Span element theme instance.
seo:
  title: Set Span element theme instance. | setTheme
  description: You may set Span element theme instance with help of method setTheme
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
use function Thermage\span;
use function Thermage\render;

// ...

span()::setTheme(new RadTheme());
```