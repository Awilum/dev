---
title: render
template: thermage/documentation/element
description: Render Span element.
seo:
  title: Render Span element. | render
  description: Render Span element
---

```php
/**
 * Render Span element to the output/string.
 *
 * @param bool $output Output or return rendered element.
 * 
 * @access public
 */
public function render($output = true)
```

#### Examples

```php
use function Thermage\span;

// ...

// Render span element.
span('Stay RAD!')->render();
```