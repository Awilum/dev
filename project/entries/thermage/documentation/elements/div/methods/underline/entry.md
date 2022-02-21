---
title: underline
template: thermage/documentation/element
description: Set Div element underline style.
seo:
  title: Set Div element underline style. | underline
  description: You may set Div element underline style with help of method underline
---

```php
/**
 * Set Div element underline style.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function underline(): self
```

#### Examples

Set underline style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->underline()
);
```

Set underline style using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'underline')
);
```

Set underline style using shortcodes
```php 
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('[underline]Stay RAD![/underline]').
  div('[u]Stay RAD![/u]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="text-decoration: underline;">Stay RAD!</div>
  </div>
</div>