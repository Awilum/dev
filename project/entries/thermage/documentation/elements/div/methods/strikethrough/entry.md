---
title: strikethrough
template: thermage/documentation/element
description: Set Div element strikethrough style.
seo:
  title: Set Div element strikethrough style. | strikethrough
  description: You may set Div element strikethrough style with help of method strikethrough
---

```php
/**
 * Set Div element strikethrough style.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function strikethrough(): self
```

#### Examples

Set strikethrough style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->strikethrough()
);
```

Set strikethrough style using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'strikethrough')
);
```

Set strikethrough style using shortcodes
```php 
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('[strikethrough]Stay RAD![/strikethrough]').
  div('[s]Stay RAD![/s]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="text-decoration: line-through;">Stay RAD!</div>
  </div>
</div>