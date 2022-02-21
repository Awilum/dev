---
title: render
template: thermage/documentation/element
description: Render Hr element.
seo:
  title: Render Hr element. | render
  description: Render Hr element
---

```php
/**
 * Render Hr element to the output/string.
 *
 * @param bool $output Output or return rendered element.
 * 
 * @access public
 */
public function render($output = true)
```

#### Examples

```php
use function Thermage\hr;

// ...

// Render hr element.
hr('Stay RAD!')->render();
```