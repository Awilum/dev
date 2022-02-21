---
title: size
template: thermage/documentation/element
description: Set Heading size.
seo:
  title: Set Heading size. | size
  description: You may set Heading size with help of method size
---

```php
/**
 * Set Heading size
 *
 * @param int $value Heading size.
 *
 * @return self Returns instance of the Heading class.
 *
 * @access public
 */
public function size(int $value): self
```

#### Examples

Set Heading size using fluent interface
```php
use function Thermage\heading;
use function Thermage\render;

// ...

render(
  heading('Stay RAD!')->size(1)
);
```

Set Heading size using magic method fluent interface
```php
use function Thermage\heading;
use function Thermage\render;

// ...

render(
  heading('Stay RAD!')->size1()
);
```

Set Heading width using magic classes pipeline
```php
use function Thermage\heading;
use function Thermage\render;

// ...

render(
  heading('Stay RAD!', 'size-1')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-heading" style="width: 100%; color: white; text-align: center;"><div style="border: 1px solid white!important;"><div style="margin: 1px; border: 1px solid white!important; padding-left: 10px; padding-top: 7px; padding-bottom:7px; color: white;">Stay RAD!</div></div></div>
  </div>
</div>