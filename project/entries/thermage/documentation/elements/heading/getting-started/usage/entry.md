---
title: Usage
template: thermage/documentation/element
seo:
  title: 
  description: 
---

Simple example of usage `Heading` element.

```php
use function Thermage\heading;
use function Thermage\render;

// ...

render (
  heading('Stay RAD!')->size1().
  heading('Stay RAD!')->size2().
  heading('Stay RAD!')->size3().
  heading('Stay RAD!')->size4().
  heading('Stay RAD!')->size5()
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="width: 100%; color: white; text-align: center;"><div style="border: 1px solid white!important;"><div style="margin: 1px; border: 1px solid white!important; padding-left: 10px; padding-top: 7px; padding-bottom:7px;">Stay RAD!</div></div></div>
    <br>
    <div class="el-div" style="width: 100%; color: white; text-align: center;"><div style="border: 2px solid white!important; padding-left: 10px; padding-top: 7px; padding-bottom:7px;">Stay RAD!</div></div>
    <br>
    <div class="el-div" style="width: 100%; color: white; text-align: center;"><div style="border: 1px solid white!important; padding-left: 10px; padding-top: 7px; padding-bottom:7px;">Stay RAD!</div></div>
    <br>
    <div class="el-div" style="width: 100%; color: white; text-align: center;"><div style="font-weight: bold;">Stay RAD!</div></div>
    <br>
    <div class="el-div" style="width: 100%; color: white; text-align: center;"><div style="opacity: .4;">Stay RAD!</div></div>
  </div>
</div>
