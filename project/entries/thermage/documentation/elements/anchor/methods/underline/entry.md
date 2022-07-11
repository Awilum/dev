---
title: underline
template: thermage/documentation/element
description: Set Anchor element underline style.
seo:
  title: Set Anchor element underline style. | underline
  description: You may set Anchor element underline style with help of method underline
---

```php
/**
 * Set Anchor element underline style.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function underline(): self
```

#### Examples

Set underline style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->underline()
);
```

Set underline style using magic classes pipeline
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage', 'underline')->href('https://awilum.github.io/thermage/')
);
```

Set underline style using shortcodes
```php 
use function Thermage\anchor;
use function Thermage\render;

// ...

render( 
  anchor('[underline]Thermage[/underline]')->href('https://awilum.github.io/thermage/').
  anchor('[u]Thermage[/u]')->href('https://awilum.github.io/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a" style="text-decoration: underline;"><a href="https://awilum.github.io/thermage/">Thermage</a></div>
  </div>
</div>