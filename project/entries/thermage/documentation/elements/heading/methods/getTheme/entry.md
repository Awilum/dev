---
title: getTheme
template: thermage/documentation/element
description: Get Heading element theme.
seo:
  title: Get Heading element theme. | getTheme
  description: You may get Heading element theme with help of method getTheme
---

```php
/**
 * Get Heading element theme.
 *
 * @return Theme Returns Heading element theme.
 *
 * @access public
 */
public function getTheme(): Theme
```

#### Examples

```php
use function Thermage\heading;
use function Thermage\render;

// ...

$theme = heading()::getTheme();
```