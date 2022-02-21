---
title: h
template: thermage/documentation/element
description: Set Div element height.
seo:
  title: Set Div element height. | h
  description: You may set Div element height with help of method h
---

```php
/**
 * Set Div element height
 *
 * @param int $value Div height.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function h(int $value): self
```

#### Examples

Set Div element height using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->h(7)->bgRed()
);
```

Set Div element height using magic method fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->h7()->bgRed()
);
```

Set Div element height using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'h-7 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div style="background-color: #dc3545; width: 100%; height: 105px; align-items: center; display: flex;">Stay RAD!</div>
  </div>
</div>