---
title: textAlign
template: thermage/documentation/element
description: Set Hr element text align.
seo:
  title: Set Hr element text align. | textAlign
  description: You may set Hr text align with help of method textAlign
---

```php
/**
 * Set Hr text align style.
 *
 * @param mixed $value Text align value.
 *
 * @return self Returns instance of the Alert class.
 *
 * @access public
 */
public function textAlign(string $value): self
```

#### Examples

Set hr text align left using fluent interface
```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  hr('Stay RAD!')->textAlignLeft()
);
```

Set hr text align left using magic classes pipeline
```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  hr('Stay RAD!', 'text-align-left')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="width: 100%; color: white;"><div style="border-bottom: 1px solid red; width: 100%; border-color: white!important; position: relative;
height: 12px;"><div style="background: black;width: 90px;position: absolute;left: 17px;text-align: center;top: 3px;">Stay RAD!</div></div></div>
  </div>
</div>

By default Hr element text align style is `left`, but you can change it to `right` or `center`.