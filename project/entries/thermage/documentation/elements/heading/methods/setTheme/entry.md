---
title: setTheme
template: thermage/documentation/element
description: Set Heading element theme instance.
seo:
  title: Set Heading element theme instance. | setTheme
  description: You may set Heading element theme instance with help of method setTheme
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
use function Thermage\heading;
use function Thermage\render;

// ...

heading()::setTheme(new RadTheme());
```