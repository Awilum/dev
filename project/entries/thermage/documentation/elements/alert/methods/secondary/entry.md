---
title: secondary
template: thermage/documentation/element
description: Set Alert element type secondary.
seo:
  title: Set alert element type secondary. | secondary
  description: You may set Alert element type secondary with help of method secondary
---

```php
/**
 * Set alert type secondary.
 *
 * @return self Returns instance of the Rule class.
 *
 * @access public
 */
public function secondary(): self
```

#### Examples

Set Alert element type secondary using fluent interface
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render( 
  alert('Stay RAD!')->secondary()
);
```

Set Alert element type secondary using magic classes pipeline
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render(
  alert('Stay RAD!', 'secondary')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-alert el-alert--secondary">Stay RAD!</div>
  </div>
</div>