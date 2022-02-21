---
title: render
template: thermage/documentation/element
description: Render Paragraph element.
seo:
  title: Render Paragraph element. | render
  description: Render Paragraph element
---

```php
/**
 * Render Paragraph element to the output/string.
 *
 * @param bool $output Output or return rendered element.
 * 
 * @access public
 */
public function render($output = true)
```

#### Examples

```php
use function Thermage\paragraph;

// ...

// Render paragraph element.
paragraph('Stay RAD!')->render();
```