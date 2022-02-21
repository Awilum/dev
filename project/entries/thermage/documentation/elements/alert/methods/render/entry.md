---
title: render
template: thermage/documentation/element
description: Render Alert element.
seo:
  title: Render Alert element. | render
  description: Render Alert element
---

```php
/**
 * Render Alert element to the output/string.
 *
 * @param bool $output Output or return rendered element.
 * 
 * @access public
 */
public function render($output = true)
```

#### Examples

```php
use function Thermage\alert;

// ...

// Render alert element.
alert('Stay RAD!')->render();
```