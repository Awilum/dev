---
title: Usage
template: thermage/documentation/element
seo:
  title: 
  description: 
---

Simple example of usage `Italic` element.

```php
use function Thermage\italic;
use function Thermage\render;

// ...

render (
  italic('Stay RAD!')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="font-style: italic;">Stay RAD!</div>
  </div>
</div>