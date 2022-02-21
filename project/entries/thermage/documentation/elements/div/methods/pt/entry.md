---
title: pt
template: thermage/documentation/element
description: Set Div padding top style.
seo:
  title: Set Div element padding top style. | pt
  description: You may set Div element padding top style with help of method pt
---

```php
/**
 * Set Div element padding top style.
 *
 * @param int $value Padding top value.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function pt(int $value): self
```

#### Examples

Set padding top style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->pt(10)->bg('red')
);
```

Set padding top style using magic method fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->pt10()->bgRed()
);
```

Set padding top style using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'pt-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="padding-top: 156px; align-items: center; display: flex; text-align: left; background: #dc3545; width: auto;">Stay RAD!</div>
  </div>
</div>