---
title: Usage
template: thermage/documentation/element
seo:
  title: 
  description: 
---

Simple example of usage `Paragraph` element with fluent interface.

```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render (
  paragraph('Stay RAD!')
    ->pl5()
    ->colorGreen()
    ->bgPurple()
    ->bold()
);
```

Simple example of usage `Paragraph` element with magic classes pipeline.

```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render (
  paragraph('Stay RAD!', 'pl-5 color-green bg-purple bold')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div style="background-color: #6f42c1; color: #28a745; font-weight: bold; padding-left:36px;">Stay RAD!</div>
  </div>
</div>