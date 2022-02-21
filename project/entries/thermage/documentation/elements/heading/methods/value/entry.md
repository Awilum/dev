---
title: value
template: thermage/documentation/element
description: Set Heading element value.
seo:
  title: Set Heading element value. | value
  description: You may set Heading element value with help of method value
---

```php
/**
 * Set Heading element value.
 *
 * @param string $value Heading element value.
 *
 * @return self Returns instance of the Heading element class.
 *
 * @access public
 */
public function value(string $value = ''): self
```

#### Examples

```php
use function Thermage\heading;
use function Thermage\render;

// ...

render(
  heading()->value('Stay RAD!')
);
```