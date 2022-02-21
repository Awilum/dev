---
title: value
template: thermage/documentation/element
description: Set Div element value.
seo:
  title: Set Div element value. | value
  description: You may set Div element value with help of method value
---

```php
/**
 * Set Div element value.
 *
 * @param string $value Div element value.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function value(string $value = ''): self
```

#### Examples

```php
use function Thermage\div;
use function Thermage\render;

// ...

render(
  div()->value('Stay RAD!')
);
```