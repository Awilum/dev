---
title: invisible
template: thermage/documentation/element
description: Set Div element invisible style.
seo:
  title: Set Div element invisible style. | blink
  description: You may set element invisible style with help of method blink
---

```php
/**
 * Set Div element invisible style.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function invisible(): self
```

#### Examples

Set invisible style using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!')->invisible()
);
```

Set invisible style using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('Stay RAD!', 'invisible')
);
```

Set invisible style using shortcodes
```php 
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div('[invisible]Stay RAD![/invisible]')
);
```