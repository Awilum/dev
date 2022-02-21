---
title: textAlignVertical
template: thermage/documentation/element
description: Set Div element text align vertical.
seo:
  title: Set Div element text align. | textAlignVertical
  description: You may set Div element text align with help of method textAlignVertical
---

```php
/**
 * Set Div element text align vertical style.
 *
 * @param mixed $value Text align vertical value.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function textAlignVertical(string $value): self
```

#### Examples

Set Div element text align left using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render (
  div('Stay RAD!')->textAlignVertical('middle')->h(10)->bg('red');
);

// or with magic method
render (
  div('Stay RAD!')->textAlignVerticalMiddle()->h10()->bgRed();
);
```

Set Div element text align left using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render (
  div('Stay RAD!', 'text-align-vertical-bottom h-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="padding-top: 156px; align-items: center; display: flex; background: #dc3545; width: auto; text-align: left;">Stay RAD!</div>
  </div>
</div>

By default Div element text align vertical style is `middle`, but you can change it to `top` or `bottom`.