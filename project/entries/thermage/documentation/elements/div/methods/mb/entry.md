---
title: mb
template: thermage/documentation/element
description: Set Div margin bottom style.
seo:
  title: Set Div element margin bottom style. | mb
  description: You may set Div element margin bottom style with help of method mb
---

```php
/**
 * Set Div element margin bottom style.
 *
 * @param int $value margin bottom value.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function mb(int $value): self
```

#### Examples

Set margin bottom style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->mb(10)->bg('red')
);
```

Set margin bottom style using magic method fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->mb10()->bgRed()
);
```

Set margin bottom style using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'mb-10 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="margin-bottom: 156px; align-items: center; display: flex; background: #dc3545; width: auto;">Stay RAD!</div>
  </div>
</div>