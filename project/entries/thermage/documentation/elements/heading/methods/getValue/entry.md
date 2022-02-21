---
title: getValue
template: thermage/documentation/element
description: Get Heading element value.
seo:
  title: Get Heading element value. | getValue
  description: You may get Heading element value with help of method getValue
---

```php
/**
 * Get Heading element value.
 *
 * @return string Returns Heading element value.
 *
 * @access public
 */
public function getValue(): string
```

#### Examples

```php
use function Thermage\heading;
use function Thermage\render;

// ...

$value = heading('Stay RAD!')->getValue();
```