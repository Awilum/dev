---
title: Usage
template: thermage/documentation/element
seo:
  title: 
  description: 
---

Simple example of usage `Bold` element.

```php
use function Thermage\bold;
use function Thermage\render;

// ...

render (
  bold('Stay RAD!')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="font-weight: bold;">Stay RAD!</div>
  </div>
</div>