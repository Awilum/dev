---
title: bold
template: thermage/documentation/element
description: Set Span element bold style.
seo:
  title: Set Span element bold style. | bold
  description: You may set element bold style with help of method bold
---

```php
/**
 * Set Span element bold style.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function bold(): self
```

#### Examples

Set bold style using fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->bold()
);
```

Set bold style using magic classes pipeline
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!', 'bold')
);
```

Set bold style using shortcodes
```php 
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('[bold]Stay RAD![/bold]').
  span('[b]Stay RAD![/b]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="font-weight: bold;">Stay RAD!</div>
  </div>
</div>