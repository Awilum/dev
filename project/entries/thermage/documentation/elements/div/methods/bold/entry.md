---
title: bold
template: thermage/documentation/element
description: Set Div element bold style.
seo:
  title: Set Div element bold style. | bold
  description: You may set element bold style with help of method bold
---

```php
/**
 * Set Div element bold style.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function bold(): self
```

#### Examples

Set bold style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->bold()
);
```

Set bold style using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'bold')
);
```

Set bold style using shortcodes
```php 
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('[bold]Stay RAD![/bold]').
  div('[b]Stay RAD![/b]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="font-weight: bold;">Stay RAD!</div>
  </div>
</div>