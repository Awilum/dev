---
title: getValue
template: thermage/documentation/element
description: Get Alert element value.
seo:
  title: Get Alert element value. | getValue
  description: You may get alert element value with help of method getValue
---

```php
/**
 * Get Alert element value.
 *
 * @return string Returns Alert element value.
 *
 * @access public
 */
public function getValue(): string
```

#### Examples

```php
use function Thermage\alert;
use function Thermage\render;

// ...

$value = alert('Stay RAD!')->getValue();
```