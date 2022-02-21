---
title: Usage
template: thermage/documentation/shortcodes
seo:
  title: 
  description: 
---

Simple example of shortcodes usage with element `Div`.

```php
use function Thermage\div;
use function Thermage\render;

// ...

render (
  div('[bg=purple][color=green][b]Stay RAD![/b][/color][/bg]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div style="background-color: #6f42c1; color: #28a745; font-weight: bold;">Stay RAD!</div>
  </div>
</div>