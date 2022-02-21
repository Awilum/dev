---
title: value
template: thermage/documentation/element
description: Set Span element value.
seo:
  title: Set Span element value. | value
  description: You may set Span element value with help of method value
---

```php
/**
 * Set Span element value.
 *
 * @param string $value Span element value.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function value(string $value = ''): self
```

#### Examples

```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span()->value('Stay RAD!')
);
```