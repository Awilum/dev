---
title: display
template: thermage/documentation/element
description: Set Span element display style.
seo:
  title: Set Span element display. | display
  description: You may set Span element display with help of method display
---

```php
/**
 * Set Span element display style.
 *
 * @param string $value Span display value.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function d(string $value): self
```

#### Examples

Set Span element display using magic method fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render (
  span('Stay RAD!')
    ->px20()
    ->mx20()
    ->colorGreen()
    ->bgPurple()
    ->bold()
    ->dBlock()
);
```

Set Span element width using magic classes pipeline
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!', 'px-20 mx-20 color-green bg-purple bold d-block')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div-with-p-m" style="font-weight:bold;">Stay RAD!</div>
  </div>
</div>

By default Span element display state is `inline`, but you can change it to `block` or `none`.