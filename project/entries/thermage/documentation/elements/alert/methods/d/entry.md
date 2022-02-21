---
title: display
template: thermage/documentation/element
description: Set Alert element display style.
seo:
  title: Set Alert element display. | d
  description: You may set Alert element display with help of method d
---

```php
/**
 * Set Alert element display style.
 *
 * @param string $value Alert display value.
 *
 * @return self Returns instance of the Alert element class.
 *
 * @access public
 */
public function d(string $value): self
```

#### Examples

Set Alert element display using fluent interface
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render(
  alert('Stay RAD!')->d('block')
);
```

Set Alert element display using magic method fluent interface
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render(
  alert('Stay RAD!')->dBlock()
);
```

Set Alert element width using magic classes pipeline
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render(
  alert('Stay RAD!', 'd-block')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-alert el-alert--info">Stay RAD!</div>
  </div>
</div>

By default Alert element display state is `block`, but you can change it to `none`.