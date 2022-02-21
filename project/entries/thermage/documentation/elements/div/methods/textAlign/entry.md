---
title: textAlign
template: thermage/documentation/element
description: Set Div element text align.
seo:
  title: Set Div element text align. | textAlign
  description: You may set Div element text align with help of method textAlign
---

```php
/**
 * Set Div element text align style.
 *
 * @param mixed $value Text align value.
 *
 * @return self Returns instance of the Div element class.
 *
 * @access public
 */
public function textAlign(string $value): self
```

#### Examples

Set Div element text align left using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render (
  div('Stay RAD!')->textAlign('left')
);

// or with magic method
render (
  div('Stay RAD!')->textAlignLeft()
);
```

Set Div element text align left using magic classes pipeline
```php
use function Thermage\div;
use function Thermage\render;

// ...

render (
  div('Stay RAD!', 'text-align-left')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
     <div>Stay RAD!</div>
  </div>
</div>

By default Div element text align style is `left`, but you can change it to `right` or `center`.