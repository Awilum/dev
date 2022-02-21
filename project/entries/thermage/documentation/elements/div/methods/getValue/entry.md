---
title: getValue
template: thermage/documentation/element
description: Get Div element value.
seo:
  title: Get Div element value. | getValue
  description: You may get div element value with help of method getValue
---

```php
/**
 * Get Div element value.
 *
 * @return string Returns Div element value.
 *
 * @access public
 */
public function getValue(): string
```

#### Examples

```php
use function Thermage\div;
use function Thermage\render;

// ...

$value = div('Stay RAD!')->getValue();
```