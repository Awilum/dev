---
title: border
template: thermage/documentation/element
description: Set Hr element border style.
seo:
  title: Set Hr element border style. | border
  description: You may set Hr element border style with help of method border
---

```php
/**
 * Set Hr element border style.
 *
 * @param string $value Hr border style value.
 *
 * @return self Returns instance of the Hr element class.
 *
 * @access public
 */
public function border(string $value): self
```

#### Examples

Set border style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  hr()->border('thin')
);
```

Set border style using magic method fluent interface
```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  hr('Stay RAD!')->borderThin()
);
```

Set border style using magic classes pipeline
```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  hr('', 'border-thin')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="width: 100%; color: white;"><div style="border-bottom: 1px solid white; width: 100%; border-color: white!important;">&nbsp;</div></div>
  </div>
</div>

By default Hr element border is `thin`, but you can change it to `double`, `triple`, `heavy`, `super-heavy`, `dashed`, `arrow-down`, `arrow-up`, `wave`, `rope`, `rope-heavy`, `brick`, `block-small`, `block-small-heavy`, `block`, `noise`.