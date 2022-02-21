---
title: Usage
template: thermage/documentation/element
seo:
  title: 
  description: 
---

Simple example of usage `Underline` element.

```php
use function Thermage\underline;
use function Thermage\render;

// ...

render (
  underline('Stay RAD!')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="text-decoration: underline;">Stay RAD!</div>
  </div>
</div>