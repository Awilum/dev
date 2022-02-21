---
title: setTheme
template: thermage/documentation/element
description: Set Anchor element theme instance.
seo:
  title: Set Anchor element theme instance. | setTheme
  description: You may set Anchor element theme instance with help of method setTheme
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
use function Thermage\anchor;
use function Thermage\render;

// ...

anchor()::setTheme(new RadTheme());
```