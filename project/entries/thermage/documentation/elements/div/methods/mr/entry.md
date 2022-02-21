---
title: mr
template: thermage/documentation/element
description: Set Div margin right style.
seo:
  title: Set Div element margin right style. | mr
  description: You may set Div element margin right style with help of method mr
---

```php
/**
 * Set Div element margin right style.
 *
 * @param int $value Div margin right.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function mr(int $value): self
```

#### Examples

Set margin right style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->mr(10)->bg('red')
);
```

Set margin right style using magic method fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->mr10()->bgRed()
);
```

Set margin right style using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'mr-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="margin-right:75px; background: #dc3545; width: auto; text-align: left;">Stay RAD!</div>
  </div>
</div>