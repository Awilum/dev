---
title: render
template: thermage/documentation/element
description: Render Canvas element.
seo:
  title: Render Canvas element. | render
  description: Render Canvas element
---

```php
/**
 * Render Canvas element to the output/string.
 *
 * @param bool $output Output or return rendered element.
 * 
 * @access public
 */
public function render($output = true)
```

#### Examples

```php
use function Thermage\canvas;

// ...

// Render canvas element.
canvas()->render();
```