---
title: d
template: thermage/documentation/element
description: Set Anchor element display style.
seo:
  title: Set Anchor element display. | d
  description: You may set Anchor element display with help of method d
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

Set Anchor element display using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render (
  anchor('Thermage')
    ->href('https://digital.flextype.org/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a"><a href="https://digital.flextype.org/thermage/">Thermage</a></div>
  </div>
</div>

By default Alert element display state is `block`, but you can change it to `none`.