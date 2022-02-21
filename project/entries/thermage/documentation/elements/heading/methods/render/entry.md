---
title: render
template: thermage/documentation/element
description: Render Heading element.
seo:
  title: Render Heading element. | render
  description: Render Heading element
---

```php
/**
 * Render Heading element to the output/string.
 *
 * @param bool $output Output or return rendered element.
 * 
 * @access public
 */
public function render($output = true)
```

#### Examples

```php
use function Thermage\heading;

// ...

// Render heading element.
heading('Stay RAD!')->render();
```