---
title: Usage
template: thermage/documentation/element
seo:
  title: 
  description: 
---

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


