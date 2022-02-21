---
title: getTheme
template: thermage/documentation/element
description: Get Chart element theme.
seo:
  title: Get Chart element theme. | getTheme
  description: You may get Chart element theme with help of method getTheme
---

```php
/**
 * Get Chart element theme.
 *
 * @return Theme Returns Chart element theme.
 *
 * @access public
 */
public function getTheme(): Theme
```

#### Examples

```php
use function Thermage\chart;
use function Thermage\render;

// ...

$theme = chart()::getTheme();
```