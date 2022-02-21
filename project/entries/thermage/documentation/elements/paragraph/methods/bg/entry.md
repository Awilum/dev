---
title: bg
template: thermage/documentation/element
description: Set Paragraph element background color style.
seo:
  title: Set paragraph Paragraph element background color style. | bg
  description: You may set Paragraph element background color style with help of method bg
---

```php
/**
 * Set Paragraph element background color style.
 *
 * @param string $color Paragraph element background color style.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function bg(string $color): self
```

#### Examples

Set named background color style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->bg('red')
);
```

Set hex background color style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->bg('#dc3545')
);
```

Set rgb background color style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->bg('rgb(220, 53, 69)')
);
```

Set background color style using magic method fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->bgRed()
);
```

Set background color style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'bg-red')
);
```

Set background color style using shortcodes
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('[bg=red]Stay RAD![/bg]')
);
```

Set hex background color style using shortcodes
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('[bg=#dc3545]Stay RAD![/bg]')
);
```

Set rgb background color style using shortcodes
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('[bg="rgb(220, 53, 69)"]Stay RAD![/bg]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="background:#dc3545;">Stay RAD!</div>
  </div>
</div>