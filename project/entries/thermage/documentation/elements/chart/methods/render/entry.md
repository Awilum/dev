---
title: render
template: thermage/documentation/element
description: Render Chart element.
seo:
  title: Render Chart element. | render
  description: Render Chart element
---

```php
/**
 * Render Chart element to the output/string.
 *
 * @param bool $output Output or return rendered element.
 * 
 * @access public
 */
public function render($output = true)
```

#### Examples

```php
use function Thermage\chart;

// ...

// Render chart element.
chart('Stay RAD!')->render();
```