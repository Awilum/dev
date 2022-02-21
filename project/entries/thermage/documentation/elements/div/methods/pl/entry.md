---
title: pl
template: thermage/documentation/element
description: Set Div padding left style.
seo:
  title: Set Div element padding left style. | pl
  description: You may set Div element padding left style with help of method pl
---

```php
/**
 * Set Div element padding left style.
 *
 * @param int $value Div padding left.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function pl(int $value): self
```

#### Examples

Set padding left style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->pl(10)->bg('red')
);
```

Set padding left style using magic method fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->pl10()->bgRed()
);
```

Set padding left style using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'pl-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="padding-left:75px; text-align: left; background: #dc3545; width: auto;">Stay RAD!</div>
  </div>
</div>