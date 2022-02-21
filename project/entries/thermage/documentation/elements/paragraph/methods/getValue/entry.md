---
title: getValue
template: thermage/documentation/element
description: Get Paragraph element value.
seo:
  title: Get Paragraph element value. | getValue
  description: You may get paragraph element value with help of method getValue
---

```php
/**
 * Get Paragraph element value.
 *
 * @return string Returns Paragraph element value.
 *
 * @access public
 */
public function getValue(): string
```

#### Examples

```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

$value = paragraph('Stay RAD!')->getValue();
```