---
title: pr
template: thermage/documentation/element
description: Set Div padding right style.
seo:
  title: Set Div element padding right style. | pr
  description: You may set Div element padding right style with help of method pr
---

```php
/**
 * Set Div element padding right style.
 *
 * @param int $value Div padding right.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function pr(int $value): self
```

#### Examples

Set padding right style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->pr(10)->bg('red')
);
```

Set padding right style using magic method fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->pr10()->bgRed()
);
```

Set padding right style using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'pr-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="text-align: left; background: #dc3545; width: auto;">Stay RAD!</div>
  </div>
</div>