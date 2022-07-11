---
title: color
template: thermage/documentation/element
description: Set Anchor element text color style.
seo:
  title: Set Anchor element text color style. | color
  description: You may set Anchor element text color style with help of method color
---

```php
/**
 * Set Anchor element text color style.
 *
 * @param string $color Anchor element text color style.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function color(string $color): self
```

#### Examples


Set named text color style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->color('red')
);
```

Set hex text color style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->color('#dc3545')
);
```

Set rgb text color style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render (
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->color('rgb(220, 53, 69)')
);
```

Set text color style using magic method fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->colorRed()
);
```

Set text color style using magic classes pipeline
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render( 
  anchor('Thermage', 'color-red')->href('https://awilum.github.io/thermage/')
);
```

Set text color style using shortcodes
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('[color=red]Thermage[/color]')->href('https://awilum.github.io/thermage/')
);
```

Set hex text color style using shortcodes
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('[color=#dc3545]Thermage[/color]')->href('https://awilum.github.io/thermage/')
);
```

Set rgb text color style using shortcodes
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('[color="rgb(220, 53, 69)"]Thermage[/color]')->href('https://awilum.github.io/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a"><a href="https://awilum.github.io/thermage/" style="color:red;">Thermage</a></div>
  </div>
</div>