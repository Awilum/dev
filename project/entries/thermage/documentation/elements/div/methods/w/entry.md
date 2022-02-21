---
title: w
template: thermage/documentation/element
description: Set Div element width.
seo:
  title: Set Div element width. | w
  description: You may set Div element width with help of method w
---

```php
/**
 * Set Div element width
 *
 * @param int $value Div width.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function w(int $value): self
```

#### Examples

Set Div element width using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->w(70)->bgRed()
)
```

Set Div element width using magic method fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->w70()->bgRed()
);
```

Set Div element width using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'w-70 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div style="background-color: #dc3545; width: 490px">Stay RAD!</div>
  </div>
</div>