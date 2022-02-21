---
title: getTheme
template: thermage/documentation/element
description: Get Anchor element theme.
seo:
  title: Get Anchor element theme. | getTheme
  description: You may get Anchor element theme with help of method getTheme
---

```php
/**
 * Get Anchor element theme.
 *
 * @return Theme Returns Anchor element theme.
 *
 * @access public
 */
public function getTheme(): Theme
```

#### Examples

```php
use function Thermage\anchor;
use function Thermage\render;

// ...

$theme = anchor()::getTheme();
```