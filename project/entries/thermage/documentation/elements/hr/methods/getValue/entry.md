---
title: getValue
template: thermage/documentation/element
description: Get Hr element value.
seo:
  title: Get Hr element value. | getValue
  description: You may get hr element value with help of method getValue
---

```php
/**
 * Get Hr element value.
 *
 * @return string Returns Hr element value.
 *
 * @access public
 */
public function getValue(): string
```

#### Examples

```php
use function Thermage\hr;
use function Thermage\render;

// ...

$value = hr('Stay RAD!')->getValue();
```