---
title: mt
template: thermage/documentation/element
description: Set Paragraph margin top style.
seo:
  title: Set Paragraph element margin top style. | mt
  description: You may set element margin top style with help of method mt
---

```php
/**
 * Set Paragraph element margin top style.
 *
 * @param int $value margin top value.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function mt(int $value): self
```

#### Examples

Set margin top style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->mt(10)->bg('red')
);
```

Set margin top style using magic method fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->mt10()->bgRed()
);
```

Set margin top style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'mt-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="margin-top: 156px; background: #dc3545; width: auto; align-items: center; display: flex;">Stay RAD!</div>
  </div>
</div>