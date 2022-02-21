---
title: getTheme
template: thermage/documentation/element
description: Get Hr element theme.
seo:
  title: Get Hr element theme. | getTheme
  description: You may get Hr element theme with help of method getTheme
---

```php
/**
 * Get Hr element theme.
 *
 * @return Theme Returns Hr element theme.
 *
 * @access public
 */
public function getTheme(): Theme
```

#### Examples

```php
use function Thermage\hr;
use function Thermage\render;

// ...

$theme = hr()::getTheme();
```