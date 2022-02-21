---
title: data
template: thermage/documentation/element
description: Set Chart element data.
seo:
  title: Set Chart element data. | data
  description: You may set Chart element data with help of method data
---

```php
/**
 * Set chart data.
 *
 * @param array $data Data.
 *
 * @return self Returns instance of the Chart class.
 *
 * @access public
 */
public function data(array $data): self
```

#### Examples

```php
use function Thermage\chart;
use function Thermage\render;

// ...

$data = [
    'apple' => [
        'label' => 'Apple',
        'value' => 100,
        'color' => 'red',
    ],
    'orange' => [
        'label' => 'Orange',
        'value' => 270,
        'color' => 'orange',
    ],
    'lime' => [
        'label' => 'Lime',
        'value' => 220,
        'color' => 'green',
    ],
];

render(
  chart()->data($data)
);
```