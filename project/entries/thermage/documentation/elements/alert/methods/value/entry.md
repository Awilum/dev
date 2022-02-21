---
title: value
template: thermage/documentation/element
description: Set Alert element value.
seo:
  title: Set Alert element value. | value
  description: You may set Alert element value with help of method value
---

```php
/**
 * Set Alert element value.
 *
 * @param string $value Alert element value.
 *
 * @return self Returns instance of the Alert element class.
 *
 * @access public
 */
public function value(string $value = ''): self
```

#### Examples

```php
use function Thermage\alert;
use function Thermage\render;

// ...

render( 
  alert()->value('Stay RAD!')
);
```