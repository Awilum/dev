---
title: color
template: thermage/documentation/element
description: Set Paragraph element text color style.
seo:
  title: Set paragraph element text color style. | color
  description: You may set Paragraph element text color style with help of method color
---

```php
/**
 * Set Paragraph element text color style.
 *
 * @param string $color Paragraph element text color style.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function color(string $color): self
```

#### Examples


Set named text color style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->color('red')
);
```

Set hex text color style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->color('#dc3545')
);
```

Set rgb text color style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->color('rgb(220, 53, 69)')
);
```

Set text color style using magic method fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->colorRed()
);
```

Set text color style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'color-red')
);
```

Set text color style using shortcodes
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('[color=red]Stay RAD![/color]')
);
```

Set hex text color style using shortcodes
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('[color=#dc3545]Stay RAD![/color]')
);
```

Set rgb text color style using shortcodes
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('[color="rgb(220, 53, 69)"]Stay RAD![/color]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="color:red;">Stay RAD!</div>
  </div>
</div>