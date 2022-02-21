---
title: getTheme
template: thermage/documentation/element
description: Get Alert element theme.
seo:
  title: Get Alert element theme. | getTheme
  description: You may get Alert element theme with help of method getTheme
---

```php
/**
 * Get Alert element theme.
 *
 * @return Theme Returns Alert element theme.
 *
 * @access public
 */
public function getTheme(): Theme
```

#### Examples

```php
use function Thermage\alert;
use function Thermage\render;

// ...

$theme = alert()::getTheme();
```