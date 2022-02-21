---
title: value
template: thermage/documentation/element
description: Set Paragraph element value.
seo:
  title: Set Paragraph element value. | value
  description: You may set Paragraph element value with help of method value
---

```php
/**
 * Set Paragraph element value.
 *
 * @param string $value Paragraph element value.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function value(string $value = ''): self
```

#### Examples

```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph()->value('Stay RAD!')
);
```