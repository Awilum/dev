---
title: pb
template: thermage/documentation/element
description: Set Paragraph padding bottom style.
seo:
  title: Set Paragraph element padding bottom style. | pb
  description: You may set Paragraph element padding bottom style with help of method pb
---

```php
/**
 * Set Paragraph element padding bottom style.
 *
 * @param int $value Padding bottom value.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function pb(int $value): self
```

#### Examples

Set padding bottom style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->pb(10)->bg('red')
);
```

Set padding bottom style using magic method fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->pb10()->bgRed()
);
```

Set padding bottom style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'pb-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="padding-bottom: 156px; align-items: center; display: flex; text-align: left; background: #dc3545; width: auto;">Stay RAD!</div>
  </div>
</div>