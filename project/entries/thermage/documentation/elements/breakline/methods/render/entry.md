---
title: render
template: thermage/documentation/element
description: Render Breakline element.
seo:
  title: Render Breakline element. | render
  description: Render Breakline element
---

```php
/**
 * Render Breakline element to the output/string.
 *
 * @param bool $output Output or return rendered element.
 * 
 * @access public
 */
public function render($output = true)
```

#### Examples

```php
use function Thermage\breakline;

// ...

// Render breakline element.
breakline('Stay RAD!')->render();
```