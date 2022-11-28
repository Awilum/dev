---
title: pixels
template: thermage/documentation/element
description: Set Canvas element pixels.
seo:
  title: Set Canvas element pixels. | pixels
  description: You may set Canvas element pixels with help of method pixels
---

```php
/**
 * Set Canvas pixels.
 * 
 * @param array $pixles Canvas pixels array with colors.
 * 
 * @access public
 */
public function pixels(array $pixels): self 
```

#### Examples

Set Canvas element pixels using fluent interface

```php
use function Thermage\canvas;
use function Thermage\render;

// ...

render(
  canvas()->pixels([ ['red', 'red', 'red'], ['green', 'green', 'green'], ['blue', 'blue', 'blue'] ])
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
    </div>
  </div>
</div>