---
title: info
template: thermage/documentation/element
description: Set Alert element type info.
seo:
  title: Set alert element type info. | info
  description: You may set Alert element type info with help of method info
---

```php
/**
 * Set alert type info.
 *
 * @return self Returns instance of the Rule class.
 *
 * @access public
 */
public function info(): self
```

#### Examples

Set Alert element type info using fluent interface
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render(
  alert('Stay RAD!')->info()
);
```

Set Alert element type info using magic classes pipeline
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render( 
  alert('Stay RAD!', 'info')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-alert el-alert--info">Stay RAD!</div>
  </div>
</div>