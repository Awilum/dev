---
title: ml
template: thermage/documentation/element
description: Set Anchor margin left style.
seo:
  title: Set Anchor element margin left style. | ml
  description: You may set element margin left style with help of method ml
---

```php
/**
 * Set Anchor element margin left style.
 *
 * @param int $value Anchor margin left.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function ml(int $value): self
```

#### Examples

Set margin left style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render( 
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->ml(10)
);
```

Set margin left style using magic method fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->ml10()
);
```

Set margin left style using magic classes pipeline
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage', 'ml-10')->href('https://awilum.github.io/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a" style="margin-left:75px;"><a href="https://awilum.github.io/thermage/">Thermage</a></div>
  </div>
</div>