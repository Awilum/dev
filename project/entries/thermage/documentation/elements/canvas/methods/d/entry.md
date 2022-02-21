---
title: d
template: thermage/documentation/element
description: Set Canvas element display style.
seo:
  title: Set Canvas element display. | d
  description: You may set Canvas element display with help of method display
---

```php
/**
 * Set Canvas element display style.
 *
 * @param string $value Canvas display value.
 *
 * @return self Returns instance of the Canvas element class.
 *
 * @access public
 */
public function d(string $value): self
```

#### Examples

Set Canvas element display using fluent interface
```php
use function Thermage\canvas;
use function Thermage\render;

// ...

$canvas = canvas()->d('block');
```

Set Canvas element display using magic method fluent interface
```php
use function Thermage\canvas;
use function Thermage\render;

// ...

$canvas = canvas()->dBlock();
```

Set Canvas element width using magic classes pipeline
```php
use function Thermage\canvas;
use function Thermage\render;

// ...

$canvas = canvas('', 'd-block');
```

By default Canvas element display state is `block`, but you can change it to `none`.