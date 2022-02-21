---
title: mx
template: thermage/documentation/element
description: Set Span margin both style.
seo:
  title: Set Span element margin both style. | mx
  description: You may set element margin both style with help of method mx
---

```php
/**
 * Set Span element margin both style.
 *
 * @param int $value Span margin both.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function mx(int $value): self
```

#### Examples

Set margin both style using fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->mx(10)
);
```

Set margin both style using magic method fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->mx10()
);
```

Set margin both style using magic classes pipeline
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!', 'mx-10')
);
```

Set margin both style using shortcodes
```php 
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('[mx=10]Stay RAD![/mx]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="padding-left: 75px;">Stay RAD!</div>
  </div>
</div>