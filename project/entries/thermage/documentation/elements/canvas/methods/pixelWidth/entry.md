---
title: pixelWidth
template: thermage/documentation/element
description: Set Canvas element pixel width.
seo:
  title: Set Canvas element pixel width. | pixelWidth
  description: You may set Canvas element pixel width with help of method pixelWidth
---

```php
/**
 * Set Canvas pixel width.
 * 
 * @param int $value Canvas pixel width.
 * 
 * @access public
 */
public function pixelWidth(int $value): self
```

#### Examples

Set Canvas element pixel width using fluent interface
```php
use function Thermage\canvas;
use function Thermage\render;

// ...

render(
  canvas()->pixelWidth(3)->pixel(0, 0, 'green')
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

Default Canvas element pixel width is `3`.