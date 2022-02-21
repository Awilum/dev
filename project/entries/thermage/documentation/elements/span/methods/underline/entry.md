---
title: underline
template: thermage/documentation/element
description: Set Span element underline style.
seo:
  title: Set Span element underline style. | underline
  description: You may set Span element underline style with help of method underline
---

```php
/**
 * Set Span element underline style.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function underline(): self
```

#### Examples

Set underline style using fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->underline()
);
```

Set underline style using magic classes pipeline
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!', 'underline')
);
```

Set underline style using shortcodes
```php 
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('[underline]Stay RAD![/underline]').
  span('[u]Stay RAD![/u]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="text-decoration: underline;">Stay RAD!</div>
  </div>
</div>