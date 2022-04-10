---
title: render
template: thermage/documentation/element
description: Render Spark element.
seo:
  title: Render Spark element. | render
  description: Render Spark element
---

```php
/**
 * Render Spark element to the output/string.
 *
 * @param bool $output Output or return Spark rendered element.
 * 
 * @access public
 */
public function render($output = true)
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