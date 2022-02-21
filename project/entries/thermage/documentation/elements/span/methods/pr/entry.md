---
title: pr
template: thermage/documentation/element
description: Set Span padding right style.
seo:
  title: Set Span element padding right style. | pr
  description: You may set element padding right style with help of method pr
---

```php
/**
 * Set Span element padding right style.
 *
 * @param int $value Span padding right.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function pr(int $value): self
```

#### Examples

Set padding right style using fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->pr(10)
);
```

Set padding right style using magic method fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->pr10()
);
```

Set padding right style using magic classes pipeline
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!', 'pr-10')
);
```

Set padding right style using shortcodes
```php 
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('[pr=10]Stay RAD![/pr]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div">Stay RAD!</div>
  </div>
</div>