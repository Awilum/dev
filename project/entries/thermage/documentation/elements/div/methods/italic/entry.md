---
title: italic
template: thermage/documentation/element
description: Set Div element italic style.
seo:
  title: Set Div element italic style. | blink
  description: You may set element italic style with help of method blink
---

```php
/**
 * Set Div element italic style.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function italic(): self
```

#### Examples

Set italic style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->italic()
);
```

Set italic style using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'italic')
);
```

Set italic style using shortcodes
```php 
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('[italic]Stay RAD![/italic]').
  div('[i]Stay RAD![/i]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="font-style: italic;">Stay RAD!</div>
  </div>
</div>