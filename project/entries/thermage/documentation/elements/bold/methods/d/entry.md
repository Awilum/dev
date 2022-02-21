---
title: d
template: thermage/documentation/element
description: Set Bold element display style.
seo:
  title: Set Bold element display. | d
  description: You may set Bold element display with help of method d
---

```php
/**
 * Set Bold element display style.
 *
 * @param string $value Bold display value.
 *
 * @return self Returns instance of the Bold element class.
 *
 * @access public
 */
public function d(string $value): self
```

#### Examples

Set Bold element display using fluent interface
```php
use function Thermage\bold;
use function Thermage\render;

// ...

render(
  bold('Stay RAD!')->d('block')
);
```

Set Bold element display using magic method fluent interface
```php
use function Thermage\bold;
use function Thermage\render;

// ...

render(
  bold('Stay RAD!')->dBlock()
);
```

Set Bold element width using magic classes pipeline
```php
use function Thermage\bold;
use function Thermage\render;

// ...

render(
  bold('Stay RAD!', 'd-block')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="font-weight: bold;">Stay RAD!</div>
  </div>
</div>

By default Bold element display state is `inline`, but you can change it to `block` or `none`.