---
title: p
template: thermage/documentation/element
description: Set Paragraph padding style.
seo:
  title: Set Paragraph element padding style. | p
  description: You may set Paragraph element padding style with help of method p
---

```php
/**
 * Set Paragraph element padding top, right, bottom, left style.
 *
 * @param int      $top    Padding top value.
 * @param int|null $right  Padding right value.
 * @param int|null $bottom Padding bottom value.
 * @param int|null $left   Padding left value.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function p(int $top, ?int $right = null, ?int $bottom = null, ?int $left = null): self
```

#### Examples

Set padding style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->p(10)->bg('red')
);
```

Set padding style using magic method fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->p10()->bgRed()
);
```

Set padding style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'p-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="padding-left: 76px;
padding-top: 156px;
padding-bottom: 156px;
align-items: center;
display: flex;
background: #dc3545;
width: auto;">Stay RAD!</div>
  </div>
</div>