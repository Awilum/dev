---
title: border
template: thermage/documentation/element
description: Set Paragraph element border style.
seo:
  title: Set Paragraph element border style. | border
  description: You may set Paragraph element border style with help of method border
---

```php
/**
 * Set Paragraph element border style.
 *
 * @param string $value Paragraph border style value.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function border(string $value): self
```

#### Examples

Set border style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->border('square')
);
```

Set border style using magic method fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->borderSquare()
);
```

Set border style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'border-square')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="width: 100%; color: white; text-align: left;"><div style="border: 1px solid rgb(234, 219, 255)!important; padding-left: 0px; padding-top: 7px; padding-bottom:7px;">Stay RAD!</div></div>
  </div>
</div>

You can set border style `square`, `rounded`, `double`, `heavy`.