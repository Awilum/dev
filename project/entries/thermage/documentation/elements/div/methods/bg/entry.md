---
title: bg
template: thermage/documentation/element
description: Set Div element background color style.
seo:
  title: Set Div element background color style. | bg
  description: You may set Div element background color style with help of method bg
---

```php
/**
 * Set Div element background color style.
 *
 * @param string $color Div element background color style.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function bg(string $color): self
```

#### Examples

Set named background color style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->bg('red')
);
```

Set hex background color style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->bg('#dc3545')
);
```

Set rgb background color style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->bg('rgb(220, 53, 69)')
);
```

Set background color style using magic method fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->bgRed()
);
```

Set background color style using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'bg-red')
);
```

Set background color style using shortcodes
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('[bg=red]Stay RAD![/bg]')
);
```

Set hex background color style using shortcodes
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('[bg=#dc3545]Stay RAD![/bg]')
);
```

Set rgb background color style using shortcodes
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('[bg="rgb(220, 53, 69)"]Stay RAD![/bg]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
        <div style="background-color: #dc3545;">Stay RAD!</div>
  </div>
</div>