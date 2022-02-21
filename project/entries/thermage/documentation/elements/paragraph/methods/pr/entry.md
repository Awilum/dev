---
title: pr
template: thermage/documentation/element
description: Set Paragraph padding right style.
seo:
  title: Set Paragraph element padding right style. | pr
  description: You may set Paragraph element padding right style with help of method pr
---

```php
/**
 * Set Paragraph element padding right style.
 *
 * @param int $value Paragraph padding right.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function pr(int $value): self
```

#### Examples

Set padding right style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->pr(10)->bg('red')
);
```

Set padding right style using magic method fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->pr10()->bgRed()
);
```

Set padding right style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'pr-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="text-align: left; background: #dc3545; width: auto;">Stay RAD!</div>
  </div>
</div>