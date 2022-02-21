---
title: render
template: thermage/documentation/element
description: Render Strikethrough element.
seo:
  title: Render Strikethrough element. | render
  description: Render Strikethrough element
---

```php
/**
 * Render Strikethrough element to the output/string.
 *
 * @param bool $output Output or return rendered element.
 * 
 * @access public
 */
public function render($output = true)
```

#### Examples

```php
use function Thermage\strikethrough;

// ...

// Render strikethrough element.
strikethrough('Stay RAD!')->render();
```