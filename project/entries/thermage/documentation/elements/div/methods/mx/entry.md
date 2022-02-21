---
title: mx
template: thermage/documentation/element
description: Set Div margin x style.
seo:
  title: Set Div element margin both style. | mx
  description: You may set Div element margin x style with help of method mx
---

```php
/**
 * Set Div element margin x style.
 *
 * @param int $value Margin x value.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function mx(int $value): self
```

#### Examples

Set margin both style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->mx(10)->bg('red')
);
```

Set margin both style using magic method fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->mx10()->bgRed()
);
```

Set margin both style using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'mx-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="margin-left: 75px; margin-right: 75px; background: #dc3545;
width: auto; text-align: left;">Stay RAD!</div>
  </div>
</div>