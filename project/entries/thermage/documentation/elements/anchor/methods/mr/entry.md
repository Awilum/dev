---
title: mr
template: thermage/documentation/element
description: Set Anchor margin right style.
seo:
  title: Set Anchor element margin right style. | mr
  description: You may set element margin right style with help of method mr
---

```php
/**
 * Set Anchor element margin right style.
 *
 * @param int $value Anchor margin right.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function mr(int $value): self
```

#### Examples

Set margin right style using fluent interface
```php
render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->mr(10)
);
```

Set margin right style using magic method fluent interface
```php
render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')->mr10()
);
```

Set margin right style using magic classes pipeline
```php
render(
  anchor('Thermage', 'mr-10')->href('https://awilum.github.io/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a"><a href="https://awilum.github.io/thermage/">Thermage</a></div>
  </div>
</div>