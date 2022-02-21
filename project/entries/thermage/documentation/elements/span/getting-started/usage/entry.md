---
title: Usage
template: thermage/documentation/element
seo:
  title: 
  description: 
---

Simple example of usage `Span` element with fluent interface.

```php
use function Thermage\span;
use function Thermage\render;

// ...

render (
  span('Stay RAD!')
    ->px20()
    ->mx20()
    ->colorGreen()
    ->bgPurple()
    ->bold()
);
```

Simple example of usage `Span` element with magic classes pipeline.

```php
use function Thermage\span;
use function Thermage\render;

// ...

render (
  span('Stay RAD!', 'px-20 mx-20 color-green bg-purple bold')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div-with-p-m" style="font-weight:bold;">Stay RAD!</div>
  </div>
</div>