---
title: data
template: thermage/documentation/element
description: Set Spark element data.
seo:
  title: Set Spark element data. | data
  description: You may set Spark element data with help of method data
---

```php
/**
 * Set spark data.
 *
 * @param array $data Data with numbers.
 *
 * @return self Returns instance of the Spark class.
 *
 * @access public
 */
public function data(array $data): self
```

#### Examples

Simple example of usage `Spark` element.

```php
use function Thermage\spark;
use function Thermage\render;

// ...

$data = [0,30,55,80,33,150];

render(
  spark()->colorWhite()->data($data)
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    ▁▂▃▅▂▇
  </div>
</div>