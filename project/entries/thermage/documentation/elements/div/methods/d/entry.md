---
title: d
template: thermage/documentation/element
description: Set Div element display style.
seo:
  title: Set Div element display. | d
  description: You may set Div element display with help of method d
---

```php
/**
 * Set Div element display style.
 *
 * @param string $value Div display value.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function d(string $value): self
```

#### Examples

Set Div element display using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->d('block')->bg('red')
);
```

Set Div element display using magic method fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->dBlock()->bgRed()
);
```

Set Div element width using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'd-block bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div style="background-color: #dc3545; width: 100%">Stay RAD!</div>
  </div>
</div>

By default Div element display state is `block`, but you can change it to `inline` or `none`.