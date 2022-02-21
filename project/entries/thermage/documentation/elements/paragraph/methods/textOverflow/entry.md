---
title: textOverflow
template: thermage/documentation/element
description: Set Paragraph element text overflow.
seo:
  title: Set Paragraph element text overflow. | textOverflow
  description: You may set Paragraph element text overflow with help of method textOverflow
---

```php
/**
 * Set Paragraph element value overflow.
 *
 * @param string $value Variant of value overflow.
 * 
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function textOverflow(string $value): self
```

#### Examples

Set Paragraph element text overflow using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->w7()->textOverflow('ellipsis')
);
```

Set Paragraph element text overflow using magic method fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->w7()->textOverflowEllipsis()
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div style="background-color: #dc3545; width: 50px;">Stay...</div>
  </div>
</div>

By default Paragraph element text overflow style is `clip`, but you can change it to `ellipsis` or `hidden`.