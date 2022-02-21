---
title: getValue
template: thermage/documentation/element
description: Get Span element value.
seo:
  title: Get Span element value. | getValue
  description: You may get span element value with help of method getValue
---

```php
/**
 * Get Span element value.
 *
 * @return string Returns Span element value.
 *
 * @access public
 */
public function getValue(): string
```

#### Examples

```php
use function Thermage\span;
use function Thermage\render;

// ...

$value = span('Stay RAD!')->getValue();
```