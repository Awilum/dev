---
title: textAlignVertical
template: thermage/documentation/element
description: Set Paragraph element text align vertical.
seo:
  title: Set Paragraph element text align. | textAlignVertical
  description: You may set Paragraph element text align with help of method textAlignVertical
---

```php
/**
 * Set Paragraph element text align vertical style.
 *
 * @param mixed $value Text align vertical value.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function textAlignVertical(string $value): self
```

#### Examples

Set Paragraph element text align left using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render (
  paragraph('Stay RAD!')->textAlignVertical('middle')->h(10)->bg('red');
);

// or with magic method
render (
  paragraph('Stay RAD!')->textAlignVerticalMiddle()->h10()->bgRed();
);
```

Set Div element text align left using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render (
  paragraph('Stay RAD!', 'text-align-vertical-bottom h-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="padding-top: 156px; align-items: center; display: flex; background: #dc3545; width: auto; text-align: left;">Stay RAD!</div>
  </div>
</div>

By default Paragraph element text align vertical style is `middle`, but you can change it to `top` or `bottom`.