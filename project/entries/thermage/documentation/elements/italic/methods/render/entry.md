---
title: render
template: thermage/documentation/element
description: Render Italic element.
seo:
  title: Render Italic element. | render
  description: Render Italic element
---

```php
/**
 * Render Italic element to the output/string.
 *
 * @param bool $output Output or return rendered element.
 * 
 * @access public
 */
public function render($output = true)
```

#### Examples

```php
use function Thermage\italic;

// ...

// Render italic element.
italic('Stay RAD!')->render();
```