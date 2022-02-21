---
title: value
template: thermage/documentation/element
description: Set Anchor element value.
seo:
  title: Set Anchor element value. | value
  description: You may set Anchor element value with help of method value
---

```php
/**
 * Set Anchor element value.
 *
 * @param string $value Anchor element value.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function value(string $value = ''): self
```

#### Examples

```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor()->value('Thermage')->href('https://digital.flextype.org/thermage/')
);
```