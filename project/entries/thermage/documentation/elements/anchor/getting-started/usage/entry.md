---
title: Usage
template: thermage/documentation/element
seo:
  title: 
  description: 
---

Simple example of usage `Anchor` element with fluent interface.

```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render (
  anchor('Thermage')
    ->href('https://awilum.github.io/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a"><a href="https://awilum.github.io/thermage/">Thermage</a></div>
  </div>
</div>