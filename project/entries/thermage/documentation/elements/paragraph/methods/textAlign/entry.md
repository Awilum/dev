---
title: textAlign
template: thermage/documentation/element
description: Set Paragraph element text align.
seo:
  title: Set Paragraph element text align. | textAlign
  description: You may set Paragraph element text align with help of method textAlign
---

```php
/**
 * Set Paragraph text align style.
 *
 * @param mixed $value Text align value.
 *
 * @return self Returns instance of the Heading class.
 *
 * @access public
 */
public function textAlign(string $value): self
```

#### Examples

Set Paragraph element text align left using fluent interface
```php
use function Thermage\div;
use function Thermage\render;

// ...

render (
  paragraph('Stay RAD!')->textAlign('left')
);

// or with magic method
render (
  paragraph('Stay RAD!')->textAlignLeft()
);
```

Set Div text align left using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render (
  paragraph('Stay RAD!', 'text-align-left')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
     <div>Stay RAD!</div>
  </div>
</div>

By default Paragraph element text align style is `left`, but you can change it to `right` or `center`.