---
title: clearfix
template: thermage/documentation/element
description: Force Div element to self-clear its children block elements linebreaks.
seo:
  title: Force Div element to self-clear its Children block elements linebreaks. | clearfix
  description: You may force Div element to self-clear its children block elements linebreaks with help of method clearfix
---

```php
/**
 * Force element to self-clear its children block elements linebreaks.
 *
 * @return self Returns instance of the Element class.
 *
 * @access public
 */
public function clearfix(): self
```

#### Examples


Simple example of usage `Div` element as container for nested `Div` elements.

```php
use function Thermage\div;
use function Thermage\render;

// ...

render (
  div(
    div('Stay', 'pl-5 color-green bg-purple bold').
    div('RAD!', 'pl-5 color-green bg-purple bold')
  )->clearfix()
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div style="background-color: #6f42c1; color: #28a745; font-weight: bold; padding-left:36px;">Stay RAD!</div>
    <div style="background-color: #6f42c1; color: #28a745; font-weight: bold; padding-left:36px;">Stay RAD!</div>
  </div>
</div>
