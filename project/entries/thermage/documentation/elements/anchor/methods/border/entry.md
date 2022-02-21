---
title: border
template: thermage/documentation/element
description: Set Anchor element border style.
seo:
  title: Set Anchor element border style. | border
  description: You may set Anchor element border style with help of method border
---

```php
/**
 * Set Anchor element border style.
 *
 * @param string $value Anchor border style value.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function border(string $value): self
```

#### Examples

Set border style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://digital.flextype.org/thermage/')->border('square')
);
```

Set border style using magic method fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://digital.flextype.org/thermage/')->borderSquare()
);
```

Set border style using magic classes pipeline
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage', 'border-square')->href('https://digital.flextype.org/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="width: 100%; color: white; text-align: left;"><div style="border: 1px solid rgb(234, 219, 255)!important; padding-left: 0px; padding-top: 7px; padding-bottom:7px;"><div class="el-a"><a href="https://digital.flextype.org/thermage/">Thermage</a></div></div></div>
  </div>
</div>

You can set border style `square`, `rounded`, `double`, `heavy`, .