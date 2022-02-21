---
title: py
template: thermage/documentation/element
description: Set Paragraph padding y style.
seo:
  title: Set Paragraph element padding y style. | py
  description: You may set Paragraph element padding y style with help of method py
---

```php
/**
 * Set Paragraph element padding y style.
 *
 * @param int $value Padding y value.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function py(int $value): self
```

#### Examples

Set padding y style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->py(10)->bg('red')
);
```

Set padding y style using magic method fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->py10()->bgRed()
);
```

Set padding y style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'py-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="padding-top: 156px; padding-bottom: 156px; align-items: center; display: flex; background: #dc3545; width: auto; text-align: left;">Stay RAD!</div>
  </div>
</div>