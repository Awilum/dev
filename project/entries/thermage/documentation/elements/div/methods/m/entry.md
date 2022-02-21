---
title: m
template: thermage/documentation/element
description: Set Div margin style.
seo:
  title: Set Div element margin style. | m
  description: You may set Div element margin style with help of method m
---

```php
/**
 * Set Div element margin top, right, bottom, left style.
 *
 * @param int      $top    Margin top value.
 * @param int|null $right  Margin right value.
 * @param int|null $bottom Margin bottom value.
 * @param int|null $left   Margin left value.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function m(int $top, ?int $right = null, ?int $bottom = null, ?int $left = null): self
```

#### Examples

Set margin style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->m(10)->bg('red')
);
```

Set margin style using magic method fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->m10()->bgRed()
);
```

Set margin style using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'm-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="margin-right: 76px;
margin-left: 76px;
margin-top: 76px;
align-items: center;
display: flex;
background: #dc3545;
width: auto;">Stay RAD!</div>
  </div>
</div>