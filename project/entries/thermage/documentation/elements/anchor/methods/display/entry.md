---
title: display
template: thermage/documentation/element
description: Set Anchor element display style.
seo:
  title: Set Anchor element display. | display
  description: You may set Anchor element display with help of method display
---

```php
/**
 * Set Anchor element display style.
 *
 * @param string $value Anchor display value.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function d(string $value): self
```

#### Examples

Simple example of usage `Anchor` element with fluent interface.

```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render (
  anchor('Thermage')
    ->href('https://awilum.github.io/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a"><a href="https://awilum.github.io/thermage/">Thermage</a></div>
  </div>
</div>

By default Anchor element display state is `inline`, but you can change it to `block` or `none`.