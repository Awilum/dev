---
title: blink
template: thermage/documentation/element
description: Set Span element blink style.
seo:
  title: Set Span element blink style. | blink
  description: You may set element blink style with help of method blink
---

```php
/**
 * Set Span element blink style.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function blink(): self
```

#### Examples

Set blink style using fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->blink()
);
```

Set blink style using magic classes pipeline
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!', 'blink')
);
```

Set blink style using shortcodes
```php 
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('[blink]Stay RAD![/blink]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div blink">Stay RAD!</div>
  </div>
</div>