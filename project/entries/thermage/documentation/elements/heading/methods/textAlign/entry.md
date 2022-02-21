---
title: textAlign
template: thermage/documentation/element
description: Set Heading element text align.
seo:
  title: Set Heading element text align. | textAlign
  description: You may set Heading text align with help of method textAlign
---

```php
/**
 * Set Heading text align style.
 *
 * @param mixed $value Text align value.
 *
 * @return self Returns instance of the Heading class.
 *
 * @access public
 */
public function textAlign(string $value): self
```

#### Examples

Set Heading text align center using fluent interface
```php
use function Thermage\heading;
use function Thermage\render;

// ...

render (
  heading('Stay RAD!')->textAlign('center')
);

// or with magic method
render (
  heading('Stay RAD!')->textAlignCenter()
);
```

Set Heading text align center using magic classes pipeline
```php
use function Thermage\heading;
use function Thermage\render;

// ...

render (
  heading('Stay RAD!', 'text-align-center')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-heading" style="width: 100%; color: white; text-align: center;"><div style="border: 1px solid white!important;"><div style="margin: 1px; border: 1px solid white!important; padding-left: 10px; padding-top: 7px; padding-bottom:7px; color: white;">Stay RAD!</div></div></div>
  </div>
</div>

By default Heading element text align style is `left`, but you can change it to `right`.