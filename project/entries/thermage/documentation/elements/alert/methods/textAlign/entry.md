---
title: textAlign
template: thermage/documentation/element
description: Set Alert element text align.
seo:
  title: Set Alert element text align. | textAlign
  description: You may set Alert text align with help of method textAlign
---

```php
/**
 * Set Alert text align style.
 *
 * @param mixed $value Text align value.
 *
 * @return self Returns instance of the Alert class.
 *
 * @access public
 */
public function textAlign(string $value): self
```

#### Examples

Set Alert text align left using fluent interface
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render (
  alert('Stay RAD!')->textAlign('left')
);

// or with magic method
render (
  alert('Stay RAD!')->textAlignLeft()
);
```

Set Alert text align left using magic classes pipeline
```php
use function Thermage\alert;
use function Thermage\render;

// ...

render (
  alert('Stay RAD!', 'text-align-left')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-alert el-alert--info">Stay RAD!</div>
  </div>
</div>

By default Alert element text align style is `left`, but you can change it to `right` or `center`.