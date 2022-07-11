---
title: bg
template: thermage/documentation/element
description: Set Anchor element background color style.
seo:
  title: Set Anchor element background color style. | bg
  description: You may set Anchor element background color style with help of method bg
---

```php
/**
 * Set Anchor element background color style.
 *
 * @param string $color Anchor element background color style.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function bg(string $color): self
```

#### Examples

Set named background color style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->bg('red')
);
```

Set hex background color style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->bg('#dc3545')
);
```

Set rgb background color style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->bg('rgb(220, 53, 69)')
);
```

Set background color style using magic method fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->bgRed()
);
```

Set background color style using magic classes pipeline
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage', 'bg-red')->href('https://awilum.github.io/thermage/')
);
```

Set background color style using shortcodes
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('[bg=red]Thermage[/bg]')->href('https://awilum.github.io/thermage/')
);
```

Set hex background color style using shortcodes
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('[bg=#dc3545]Thermage[/bg]')->href('https://awilum.github.io/thermage/')
);
```

Set rgb background color style using shortcodes
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('[bg="rgb(220, 53, 69)"]Thermage[/bg]')->href('https://awilum.github.io/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a" style="background:#dc3545;"><a href="https://awilum.github.io/thermage/">Thermage</a></div>
  </div>
</div>