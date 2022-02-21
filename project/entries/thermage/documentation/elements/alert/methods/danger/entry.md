---
title: danger
template: thermage/documentation/element
description: Set Alert element type danger.
seo:
  title: Set alert element type danger. | danger
  description: You may set Alert element type danger with help of method danger
---

```php
/**
 * Set alert color danger.
 *
 * @return self Returns instance of the Rule class.
 *
 * @access public
 */
public function danger(): self
```

#### Examples

Set Alert element type danger using fluent interface
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render(
  alert('Stay RAD!')->danger()
);
```

Set Alert element type danger using magic classes pipeline
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render( 
  alert('Stay RAD!', 'danger')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-alert el-alert--danger">Stay RAD!</div>
  </div>
</div>