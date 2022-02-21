---
title: w
template: thermage/documentation/element
description: Set Alert width.
seo:
  title: Set Alert width. | w
  description: You may set Alert width with help of method w
---

```php
/**
 * Set alert width
 *
 * @param int $value Alert width.
 *
 * @return self Returns instance of the Alert class.
 *
 * @access public
 */
public function w(int $value): self
```

#### Examples

Set Alert width using fluent interface
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render(
  alert('Stay RAD!')->w(70)
);
```

Set Alert width using magic method fluent interface
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render(
  alert('Stay RAD!')->w70()
);
```

Set Alert width using magic classes pipeline
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render(
  alert('Stay RAD!', 'w-70')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-alert el-alert--info el-alert-w-490">Stay RAD!</div>
  </div>
</div>