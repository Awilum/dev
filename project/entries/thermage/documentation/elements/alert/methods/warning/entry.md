---
title: warning
template: thermage/documentation/element
description: Set Alert element type warning.
seo:
  title: Set alert element type warning. | warning
  description: You may set Alert element type warning with help of method warning
---

```php
/**
 * Set alert type warning.
 *
 * @return self Returns instance of the Rule class.
 *
 * @access public
 */
public function warning(): self
```

#### Examples

Set Alert element type warning using fluent interface
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render(
  alert('Stay RAD!')->warning()
);
```

Set Alert element type warning using magic classes pipeline
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render(
  alert('Stay RAD!', 'warning')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-alert el-alert--warning">Stay RAD!</div>
  </div>
</div>