---
title: my
template: thermage/documentation/element
description: Set Div margin y style.
seo:
  title: Set Div element margin y style. | my
  description: You may set Div element margin y style with help of method my
---

```php
/**
 * Set Div element margin y style.
 *
 * @param int $value Margin y value.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function my(int $value): self
```

#### Examples

Set margin y style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->my(10)->bg('red')
);
```

Set margin y style using magic method fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->my10()->bgRed()
);
```

Set margin y style using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'my-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="margin-top: 156px; align-items: center; display: flex; background: #dc3545; width: auto; text-align: left;">Stay RAD!</div>
  </div>
</div>