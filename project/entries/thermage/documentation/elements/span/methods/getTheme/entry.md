---
title: getTheme
template: thermage/documentation/element
description: Get Span element theme.
seo:
  title: Get Span element theme. | getTheme
  description: You may get Span element theme with help of method getTheme
---

```php
/**
 * Get Span element theme.
 *
 * @return Theme Returns Span element theme.
 *
 * @access public
 */
public function getTheme(): Theme
```

#### Examples

```php
use function Thermage\span;
use function Thermage\render;

// ...

$theme = span()::getTheme();
```