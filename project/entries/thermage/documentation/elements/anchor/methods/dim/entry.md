---
title: dim
template: thermage/documentation/element
description: Set Anchor element dim style.
seo:
  title: Set Anchor element dim style. | blink
  description: You may set element dim style with help of method blink
---

```php
/**
 * Set Anchor element dim style.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function dim(): self
```

#### Examples

Set dim style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->dim()
);
```

Set dim style using magic classes pipeline
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage', 'dim')->href('https://awilum.github.io/thermage/')
);
```

Set dim style using shortcodes
```php 
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('[dim]Thermage[/dim]')->href('https://awilum.github.io/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a" style="opacity: .5;"><a href="https://awilum.github.io/thermage/">Thermage</a></div>
  </div>
</div>