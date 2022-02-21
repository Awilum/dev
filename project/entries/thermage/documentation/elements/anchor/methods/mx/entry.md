---
title: mx
template: thermage/documentation/element
description: Set Anchor margin both style.
seo:
  title: Set Anchor element margin both style. | mx
  description: You may set element margin both style with help of method mx
---

```php
/**
 * Set Anchor element margin both style.
 *
 * @param int $value Anchor margin both.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function mx(int $value): self
```

#### Examples

Set margin both style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://digital.flextype.org/thermage/')->mx(10)
);
```

Set margin both style using magic method fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://digital.flextype.org/thermage/')->mx10()
);
```

Set margin both style using magic classes pipeline
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage', 'mx-10')->href('https://digital.flextype.org/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a" style="margin-left: 75px;"><a href="https://digital.flextype.org/thermage/">Thermage</a></div>
  </div>
</div>