---
title: pl
template: thermage/documentation/element
description: Set Span padding left style.
seo:
  title: Set Span element padding left style. | pl
  description: You may set element padding left style with help of method pl
---

```php
/**
 * Set Span element padding left style.
 *
 * @param int $value Span padding left.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function pl(int $value): self
```

#### Examples

Set padding left style using fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->pl(10)
);
```

Set padding left style using magic method fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->pl10()
);
```

Set padding left style using magic classes pipeline
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!', 'pl-10')
);
```

Set padding left style using shortcodes
```php 
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('[pl=10]Stay RAD![/pl]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="padding-left:75px;">Stay RAD!</div>
  </div>
</div>