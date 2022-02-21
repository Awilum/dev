---
title: dim
template: thermage/documentation/element
description: Set Span element dim style.
seo:
  title: Set Span element dim style. | blink
  description: You may set element dim style with help of method blink
---

```php
/**
 * Set Span element dim style.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function dim(): self
```

#### Examples

Set dim style using fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->dim()
);
```

Set dim style using magic classes pipeline
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!', 'dim')
);
```

Set dim style using shortcodes
```php 
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('[dim]Stay RAD![/dim]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="opacity: .5;">Stay RAD!</div>
  </div>
</div>