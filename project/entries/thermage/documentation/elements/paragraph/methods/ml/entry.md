---
title: ml
template: thermage/documentation/element
description: Set Paragraph margin left style.
seo:
  title: Set Paragraph element margin left style. | ml
  description: You may set element margin left style with help of method ml
---

```php
/**
 * Set Paragraph element margin left style.
 *
 * @param int $value Paragraph margin left.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function ml(int $value): self
```

#### Examples

Set margin left style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->ml(10)->bg('red')
);
```

Set margin left style using magic method fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->ml10()->bgRed()
);
```

Set margin left style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'ml-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="margin-left:75px; background: #dc3545; width: auto;">Stay RAD!</div>
  </div>
</div>