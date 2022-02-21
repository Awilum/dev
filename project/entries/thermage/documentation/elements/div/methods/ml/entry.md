---
title: ml
template: thermage/documentation/element
description: Set Div margin left style.
seo:
  title: Set Div element margin left style. | ml
  description: You may set Div element margin left style with help of method ml
---

```php
/**
 * Set Div element margin left style.
 *
 * @param int $value Div margin left.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function ml(int $value): self
```

#### Examples

Set margin left style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->ml(10)->bg('red')
);
```

Set margin left style using magic method fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->ml10()->bgRed()
);
```

Set margin left style using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'ml-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="margin-left:75px; background: #dc3545; width: auto;">Stay RAD!</div>
  </div>
</div>