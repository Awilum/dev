---
title: Usage
template: thermage/documentation/element
seo:
  title: 
  description: 
---

Simple example of usage `Strikethrough` element.

```php
use function Thermage\ strikethrough;
use function Thermage\render;

// ...

render (
  strikethrough('Stay RAD!')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="text-decoration: line-through;">Stay RAD!</div>
  </div>
</div>