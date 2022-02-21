---
title: setTheme
template: thermage/documentation/element
description: Set Alert element theme instance.
seo:
  title: Set Alert element theme instance. | setTheme
  description: You may set Alert element theme instance with help of method setTheme
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
use function Thermage\alert;
use function Thermage\render;

// ...

alert()::setTheme(new RadTheme());
```