---
title: getTheme
template: thermage/documentation/element
description: Get Paragraph element theme.
seo:
  title: Get Paragraph element theme. | getTheme
  description: You may get Paragraph element theme with help of method getTheme
---

```php
/**
 * Get Paragraph element theme.
 *
 * @return Theme Returns Paragraph element theme.
 *
 * @access public
 */
public function getTheme(): Theme
```

#### Examples

```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

$theme = paragraph()::getTheme();
```