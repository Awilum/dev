---
title: setTheme
template: thermage/documentation/element
description: Set Shortcodes theme.
seo:
  title: Set Shortcodes theme. | getTheme
  description: You may set Shortcodes theme with help of method Shortcodes
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
use Thermage\Thermage;

$theme = Thermage::getShortcodes()::setTheme(new RadTheme());
```