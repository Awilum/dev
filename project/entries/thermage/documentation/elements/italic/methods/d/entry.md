---
title: d
template: thermage/documentation/element
description: Set Italic element display style.
seo:
  title: Set Italic element display. | d
  description: You may set Italic element display with help of method d
---

```php
/**
 * Set Italic element display style.
 *
 * @param string $value Italic display value.
 *
 * @return self Returns instance of the Italic element class.
 *
 * @access public
 */
public function d(string $value): self
```

#### Examples

Set Italic element display using fluent interface
```php
use function Thermage\italic;
use function Thermage\render;

// ...

render(
  italic('Stay RAD!')->d('block')
);
```

Set Italic element display using magic method fluent interface
```php
use function Thermage\italic;
use function Thermage\render;

// ...

render(
  italic('Stay RAD!')->dBlock()
);
```

Set Italic element width using magic classes pipeline
```php
use function Thermage\italic;
use function Thermage\render;

// ...

render( 
  italic('Stay RAD!', 'd-block')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div style="font-style: italic; width: 100%">Stay RAD!</div>
  </div>
</div>

By default Italic element display state is `inline`, but you can change it to `block` or `none`.