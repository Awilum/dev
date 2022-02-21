---
title: render
template: thermage/documentation/element
description: Render Div element.
seo:
  title: Render Div element. | render
  description: Render Div element
---

```php
/**
 * Render Div element to the output/string.
 *
 * @param bool $output Output or return rendered element.
 * 
 * @access public
 */
public function render($output = true)
```

#### Examples

```php
use function Thermage\div;

// ...

// Render div element.
div('Stay RAD!')->render();
```