---
title: invisible
template: thermage/documentation/element
description: Set Paragraph element invisible style.
seo:
  title: Set Paragraph element invisible style. | blink
  description: You may set element invisible style with help of method blink
---

```php
/**
 * Set Paragraph element invisible style.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function invisible(): self
```

#### Examples

Set invisible style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->invisible()
);
```

Set invisible style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'invisible')
);
```

Set invisible style using shortcodes
```php 
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('[invisible]Stay RAD![/invisible]')
);
```