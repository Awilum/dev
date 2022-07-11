---
title: render
template: thermage/documentation/element
description: Render Anchor element.
seo:
  title: Render Anchor element. | render
  description: Render Anchor element
---

```php
/**
 * Render Anchor element to the output/string.
 *
 * @param bool $output Output or return rendered element.
 * 
 * @access public
 */
public function render($output = true)
```

#### Examples

```php
use function Thermage\anchor;

// ...

// Render anchor element.
anchor('Thermage')->href('https://awilum.github.io/thermage/')->render();
```