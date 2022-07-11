---
title: pr
template: thermage/documentation/element
description: Set Anchor padding right style.
seo:
  title: Set Anchor element padding right style. | pr
  description: You may set element padding right style with help of method pr
---

```php
/**
 * Set Anchor element padding right style.
 *
 * @param int $value Anchor padding right.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function pr(int $value): self
```

#### Examples

Set padding right style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render( 
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->pr(10)
);
```

Set padding right style using magic method fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->pr10()
);
```

Set padding right style using magic classes pipeline
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage', 'pr-10')->href('https://awilum.github.io/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a"><a href="https://awilum.github.io/thermage/">Thermage</a></div>
  </div>
</div>