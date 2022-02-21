---
title: getTheme
template: thermage/documentation/shortcodes
description: Get Shortcodes theme.
seo:
  title: Get Shortcodes theme. | getTheme
  description: You may get Shortcodes theme with help of method Shortcodes
---

```php
/**
 * Get instance of the theme that implements Themes interface.
 *
 * @return ThemeInterface Returns instance of the theme that implements Themes interface.
 *
 * @access public
 */
public static function getTheme(): ThemeInterface
```

#### Examples

```php
use Thermage\Thermage;

$theme = Thermage::getShortcodes()::getTheme();
```