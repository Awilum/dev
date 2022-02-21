---
title: value
template: thermage/documentation/element
description: Set Hr element value.
seo:
  title: Set Hr element value. | value
  description: You may set Hr element value with help of method value
---

```php
/**
 * Set Hr element value.
 *
 * @param string $value Hr element value.
 *
 * @return self Returns instance of the Hr element class.
 *
 * @access public
 */
public function value(string $value = ''): self
```

#### Examples

```php
use function Thermage\hr;
use function Thermage\render;

// ...

render(
  hr()->value('Stay RAD!')
);
```