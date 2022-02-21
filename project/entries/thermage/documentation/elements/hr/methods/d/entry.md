---
title: d
template: thermage/documentation/element
description: Set Hr element display style.
seo:
  title: Set Hr element display. | d
  description: You may set Hr element display with help of method d
---

```php
/**
 * Set Hr element display style.
 *
 * @param string $value Hr display value.
 *
 * @return self Returns instance of the Hr element class.
 *
 * @access public
 */
public function d(string $value): self
```

#### Examples

Set hr element display using fluent interface
```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->d('block')
);
```

Set hr element display using magic method fluent interface
```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  hr()->dBlock()
);
```

Set Hr element width using magic classes pipeline
```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  hr('', 'd-block')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="width: 100%; color: white;"><div style="border-bottom: 1px solid white; width: 100%; border-color: white!important;">&nbsp;</div></div>
  </div>
</div>

By default Hr element display state is `block`, but you can change it to `none`.