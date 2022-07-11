---
title: pl
template: thermage/documentation/element
description: Set Anchor padding left style.
seo:
  title: Set Anchor element padding left style. | pl
  description: You may set element padding left style with help of method pl
---

```php
/**
 * Set Anchor element padding left style.
 *
 * @param int $value Anchor padding left.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function pl(int $value): self
```

#### Examples

Set padding left style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->pl(10)
);
```

Set padding left style using magic method fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->pl10()
);
```

Set padding left style using magic classes pipeline
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage', 'pl-10')->href('https://awilum.github.io/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a" style="margin-left:75px;"><a href="https://awilum.github.io/thermage/">Thermage</a></div>
  </div>
</div>