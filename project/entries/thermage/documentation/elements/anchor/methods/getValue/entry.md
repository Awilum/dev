---
title: getValue
template: thermage/documentation/element
description: Get Anchor element value.
seo:
  title: Get Anchor element value. | getValue
  description: You may get anchor element value with help of method getValue
---

```php
/**
 * Get Anchor element value.
 *
 * @return string Returns Anchor element value.
 *
 * @access public
 */
public function getValue(): string
```

#### Examples

```php
use function Thermage\anchor;
use function Thermage\render;

// ...

$value = anchor('Thermage')->href('https://digital.flextype.org/thermage/')->getValue();
```