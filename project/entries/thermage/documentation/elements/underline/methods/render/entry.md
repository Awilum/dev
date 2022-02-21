---
title: render
template: thermage/documentation/element
description: Render Underline element.
seo:
  title: Render Underline element. | render
  description: Render Underline element
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
use function Thermage\underline;

// ...

// Render underline element.
underline('Stay RAD!')->render();
```