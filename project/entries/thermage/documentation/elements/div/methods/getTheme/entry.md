---
title: getTheme
template: thermage/documentation/element
description: Get Div element theme.
seo:
  title: Get Div element theme. | getTheme
  description: You may get Div element theme with help of method getTheme
---

```php
/**
 * Get Div element theme.
 *
 * @return Theme Returns Div element theme.
 *
 * @access public
 */
public function getTheme(): Theme
```

#### Examples

```php
use function Thermage\div;
use function Thermage\render;

// ...

$theme = div()::getTheme();
```