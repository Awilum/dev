---
title: textOverflow
template: thermage/documentation/element
description: Set Div element text overflow.
seo:
  title: Set Div element text overflow. | textOverflow
  description: You may set Div element text overflow with help of method textOverflow
---

```php
/**
 * Set Div element value overflow.
 *
 * @param string $value Variant of value overflow.
 * 
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function textOverflow(string $value): self
```

#### Examples

Set Div element text overflow using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->w7()->textOverflow('ellipsis')
);
```

Set Div element text overflow using magic method fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->w7()->textOverflowEllipsis()
)
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div style="background-color: #dc3545; width: 50px;">Stay...</div>
  </div>
</div>

By default Div element text overflow style is `clip`, but you can change it to `ellipsis` or `hidden`.