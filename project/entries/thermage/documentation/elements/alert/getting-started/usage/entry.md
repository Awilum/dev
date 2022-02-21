---
title: Usage
template: thermage/documentation/element
seo:
  title: 
  description: 
---

Simple example of usage `Alert` element.

```php
use function Thermage\alert;
use function Thermage\render;

// ...

render (
    alert('Stay RAD!')->success().
    alert('Stay RAD!')->warning().
    alert('Stay RAD!')->info().
    alert('Stay RAD!')->danger().
    alert('Stay RAD!')->primary().
    alert('Stay RAD!')->secondary()
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-alert el-alert--success">Stay RAD!</div>
    <div class="el-alert el-alert--warning">Stay RAD!</div>
    <div class="el-alert el-alert--info">Stay RAD!</div>
    <div class="el-alert el-alert--danger">Stay RAD!</div>
    <div class="el-alert el-alert--primary">Stay RAD!</div>
    <div class="el-alert el-alert--secondary">Stay RAD!</div>
  </div>
</div>