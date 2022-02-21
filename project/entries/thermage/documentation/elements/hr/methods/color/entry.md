---
title: color
template: thermage/documentation/element
description: Set Hr element text color style.
seo:
  title: Set Hr element text color style. | color
  description: You may set Hr element text color style with help of method color
---

```php
/**
 * Set Hr element text color style.
 *
 * @param string $color Hr element text color style.
 *
 * @return self Returns instance of the Hr element class.
 *
 * @access public
 */
public function color(string $color): self
```

#### Examples

Set named text color style using fluent interface
```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  hr('Stay RAD!')->color('red')
);
```

Set hex text color style using fluent interface
```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  hr('Stay RAD!')->color('#dc3545')
);
```

Set rgb text color style using fluent interface
```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  hr('Stay RAD!')->color('rgb(220, 53, 69)')
);
```

Set text color style using magic method fluent interface
```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  hr('Stay RAD!')->colorRed()
);
```

Set text color style using magic classes pipeline
```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  hr('Stay RAD!', 'color-red')
);
```

Set text color style using shortcodes
```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  hr('[color=red]Stay RAD![/color]')
);
```

Set hex text color style using shortcodes
```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  hr('[color=#dc3545]Stay RAD![/color]')
);
```

Set rgb text color style using shortcodes
```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  hr('[color="rgb(220, 53, 69)"]Stay RAD![/color]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="width: 100%; color: #dc3545;"><div style="border-bottom: 1px solid red; width: 100%; border-color: #dc3545!important; position: relative;
height: 12px;"><div style="background: black;width: 90px;position: absolute;left: 17px;text-align: center;top: 3px;">Stay RAD!</div></div></div>
  </div>
</div>