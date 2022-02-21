---
title: ml
template: thermage/documentation/element
description: Set Span margin left style.
seo:
  title: Set Span element margin left style. | ml
  description: You may set element margin left style with help of method ml
---

```php
/**
 * Set Span element margin left style.
 *
 * @param int $value Span margin left.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function ml(int $value): self
```

#### Examples

Set margin left style using fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->ml(10)
);
```

Set margin left style using magic method fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->ml10()
);
```

Set margin left style using magic classes pipeline
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!', 'ml-10')
);
```

Set margin left style using shortcodes
```php 
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('[ml=10]Stay RAD![/ml]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="padding-left:75px;">Stay RAD!</div>
  </div>
</div>