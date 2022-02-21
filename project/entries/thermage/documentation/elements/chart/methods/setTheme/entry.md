---
title: setTheme
template: thermage/documentation/element
description: Set Chart element theme instance.
seo:
  title: Set Chart element theme instance. | setTheme
  description: You may set Chart element theme instance with help of method setTheme
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
use function Thermage\chart;
use function Thermage\render;

// ...

render(
  chart()::setTheme(new RadTheme())
);
```