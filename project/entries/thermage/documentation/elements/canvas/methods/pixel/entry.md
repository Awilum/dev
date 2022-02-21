---
title: pixel
template: thermage/documentation/element
description: Set Canvas element pixel.
seo:
  title: Set Canvas element pixel. | pixel
  description: You may set Canvas element pixel with help of method pixel
---

```php
/**
 * Set pixel.
 * 
 * @param int    $x     Canvas pixel position x.
 * @param int    $y     Canvas pixel position y.
 * @param string $color Canvas pixel color.
 * 
 * @access public
 */
public function pixel(int $x, int $y, string $color): self
```

#### Examples

Set Canvas element pixel using fluent interface
```php
use function Thermage\canvas;
use function Thermage\render;

// ...

render(
  canvas()->pixel(0, 0, 'green')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
    </div>
  </div>
</div>