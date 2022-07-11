---
title: bold
template: thermage/documentation/element
description: Set Anchor element bold style.
seo:
  title: Set Anchor element bold style. | bold
  description: You may set element bold style with help of method bold
---

```php
/**
 * Set Anchor element bold style.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function bold(): self
```

#### Examples

Set bold style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->bold()
);
```

Set bold style using magic classes pipeline
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage', 'bold')->href('https://awilum.github.io/thermage/')
);
```

Set bold style using shortcodes
```php 
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('[bold]Thermage[/bold]')->href('https://awilum.github.io/thermage/').
  anchor('[b]Thermage[/b]')->href('https://awilum.github.io/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a" style="font-weight: bold;"><a href="https://awilum.github.io/thermage/">Thermage</a></div>
  </div>
</div>