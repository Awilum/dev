---
title: d
template: thermage/documentation/element
description: Set Span element display style.
seo:
  title: Set Span element display. | d
  description: You may set Span element display with help of method d
---

```php
/**
 * Set Span element display style.
 *
 * @param string $value Span display value.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function d(string $value): self
```

#### Examples

Set Span element display using fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->d('block')
);
```

Set Span element display using magic method fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->dBlock()
);
```

Set Span element width using magic classes pipeline
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!', 'd-block')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div style="font-style: italic; width: 100%">Stay RAD!</div>
  </div>
</div>

By default Span element display state is `inline`, but you can change it to `block` or `none`.