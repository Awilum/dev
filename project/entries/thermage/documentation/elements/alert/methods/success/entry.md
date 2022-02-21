---
title: success
template: thermage/documentation/element
description: Set Alert element type success.
seo:
  title: Set alert element type success. | success
  description: You may set Alert element type success with help of method success
---

```php
/**
 * Set alert type success.
 *
 * @return self Returns instance of the Rule class.
 *
 * @access public
 */
public function success(): self
```

#### Examples

Set Alert element type success using fluent interface
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render( 
  alert('Stay RAD!')->success()
);
```

Set Alert element type success using magic classes pipeline
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render( 
  alert('Stay RAD!', 'success')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-alert el-alert--success">Stay RAD!</div>
  </div>
</div>