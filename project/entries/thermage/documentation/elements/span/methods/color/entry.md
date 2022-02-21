---
title: color
template: thermage/documentation/element
description: Set Span element text color style.
seo:
  title: Set Span element text color style. | color
  description: You may set Span element text color style with help of method color
---

```php
/**
 * Set Span element text color style.
 *
 * @param string $color Span element text color style.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function color(string $color): self
```

#### Examples


Set named text color style using fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->color('red')
);
```

Set hex text color style using fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->color('#dc3545')
);
```

Set rgb text color style using fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->color('rgb(220, 53, 69)')
);
```

Set text color style using magic method fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->colorRed()
);
```

Set text color style using magic classes pipeline
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!', 'color-red')
);
```

Set text color style using shortcodes
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('[color=red]Stay RAD![/color]')
);
```

Set hex text color style using shortcodes
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('[color=#dc3545]Stay RAD![/color]')
);
```

Set rgb text color style using shortcodes
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('[color="rgb(220, 53, 69)"]Stay RAD![/color]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="color:red;">Stay RAD!</div>
  </div>
</div>