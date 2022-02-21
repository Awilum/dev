---
title: px
template: thermage/documentation/element
description: Set Span padding both style.
seo:
  title: Set Span element padding both style. | px
  description: You may set element padding both style with help of method px
---

```php
/**
 * Set Span element padding both style.
 *
 * @param int $value Span padding both.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function px(int $value): self
```

#### Examples

Set padding both style using fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->px(10)
);
```

Set padding both style using magic method fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->px10()
);
```

Set padding both style using magic classes pipeline
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!', 'px-10')
);
```

Set padding both style using shortcodes
```php 
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('[px=10]Stay RAD![/px]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="padding-left: 75px;">Stay RAD!</div>
  </div>
</div>