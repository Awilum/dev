---
title: d
template: thermage/documentation/element
description: Set Heading element display style.
seo:
  title: Set Heading element display. | d
  description: You may set Heading element display with help of method d
---

```php
/**
 * Set Heading element display style.
 *
 * @param string $value Heading display value.
 *
 * @return self Returns instance of the Heading element class.
 *
 * @access public
 */
public function d(string $value): self
```

#### Examples

Set Heading element display using fluent interface
```php
use function Thermage\heading;
use function Thermage\render;

// ...

render(
  heading('Stay RAD!')->d('block')
);
```

Set Heading element display using magic method fluent interface
```php
use function Thermage\heading;
use function Thermage\render;

// ...

render(
  heading('Stay RAD!')->dBlock()
);
```

Set Heading element width using magic classes pipeline
```php
use function Thermage\heading;
use function Thermage\render;

// ...

render(
  heading('Stay RAD!', 'd-block')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-heading" style="width: 100%; color: white; text-align: left;"><div style="border: 1px solid white!important;"><div style="margin: 1px; border: 1px solid white!important; padding-left: 10px; padding-top: 7px; padding-bottom:7px; color: white;">Stay RAD!</div></div></div>
  </div>
</div>

By default Heading element display state is `block`, but you can change it to `none`.