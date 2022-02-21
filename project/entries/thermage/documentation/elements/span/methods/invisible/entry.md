---
title: invisible
template: thermage/documentation/element
description: Set Span element invisible style.
seo:
  title: Set Span element invisible style. | blink
  description: You may set element invisible style with help of method blink
---

```php
/**
 * Set Span element invisible style.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function invisible(): self
```

#### Examples

Set invisible style using fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->invisible()
);
```

Set invisible style using magic classes pipeline
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!', 'invisible')
);
```

Set invisible style using shortcodes
```php 
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('[invisible]Stay RAD![/invisible]')
);
```