---
title: px
template: thermage/documentation/element
description: Set Paragraph padding x style.
seo:
  title: Set Paragraph element padding x style. | px
  description: You may set Paragraph element padding x style with help of method px
---

```php
/**
 * Set Paragraph element padding x style.
 *
 * @param int $value Padding x value.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function px(int $value): self
```

#### Examples

Set padding x style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->px(10)->bg('red')
);
```

Set padding x style using magic method fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->px10()->bgRed()
);
```

Set padding x style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'px-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="padding-left: 75px; background: #dc3545; width: auto; text-align: left;">Stay RAD!</div>
  </div>
</div>