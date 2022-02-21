---
title: render
template: thermage/documentation/element
description: Render Bold element.
seo:
  title: Render Bold element. | render
  description: Render Bold element
---

```php
/**
 * Render Bold element to the output/string.
 *
 * @param bool $output Output or return rendered element.
 * 
 * @access public
 */
public function render($output = true)
```

#### Examples

```php
use function Thermage\bold;

// ...

// Render bold element.
bold('Stay RAD!')->render();
```