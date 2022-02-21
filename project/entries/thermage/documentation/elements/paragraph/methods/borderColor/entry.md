---
title: borderColor
template: thermage/documentation/element
description: Set Paragraph element border color style.
seo:
  title: Set Paragraph element border color style. | borderColor
  description: You may set Paragraph element border color style with help of method borderColor
---

```php
/**
 * Set Paragraph element border color style.
 *
 * @param string $value Paragraph border color style value.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function borderColor(string $value): self
```

#### Examples

Set border style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->border('square')->borderColor('red')
);
```

Set border style using magic method fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->borderSquare()->borderColorRed()
);
```

Set border style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'border-square border-color-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="width: 100%; color: white; text-align: left;"><div style="border: 1px solid red!important; padding-left: 0px; padding-top: 7px; padding-bottom:7px;">Stay RAD!</div></div>
  </div>
</div>