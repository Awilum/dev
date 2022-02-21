---
title: size
template: thermage/documentation/element
description: Set Canvas element size.
seo:
  title: Set Canvas element size. | size
  description: You may set Canvas element size with help of method size
---

```php
/**
 * Set Canvas size.
 * 
 * @param int    $width  Canvas width.
 * @param int    $height Canvas height.
 * 
 * @access public
 */
public function size(int $width, int $height): self
```

#### Examples

Set Canvas element size using fluent interface
```php
use function Thermage\canvas;
use function Thermage\render;

// ...

render(
  canvas()->size(16, 16)
);
```
Default Canvas element width is `16` and height is `16`.