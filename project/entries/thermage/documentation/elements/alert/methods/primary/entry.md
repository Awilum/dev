---
title: primary
template: thermage/documentation/element
description: Set Alert element type primary.
seo:
  title: Set alert element type primary. | primary
  description: You may set Alert element type primary with help of method primary
---

```php
/**
 * Set alert type primary.
 *
 * @return self Returns instance of the Rule class.
 *
 * @access public
 */
public function primary(): self
```

#### Examples

Set Alert element type primary using fluent interface
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render(
  alert('Stay RAD!')->primary()
);
```

Set Alert element type primary using magic classes pipeline
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render( 
  alert('Stay RAD!', 'primary')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-alert el-alert--primary">Stay RAD!</div>
  </div>
</div>