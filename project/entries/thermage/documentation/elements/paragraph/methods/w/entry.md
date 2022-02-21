---
title: w
template: thermage/documentation/element
description: Set Paragraph element width.
seo:
  title: Set Paragraph element width. | w
  description: You may set Paragraph element width with help of method w
---

```php
/**
 * Set Paragraph element width
 *
 * @param int $value Paragraph element width.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function w(int $value): self
```

#### Examples

Set Paragraph element width using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->w(70)->bgRed()
);
```

Set Paragraph element width using magic method fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->w70()->bgRed()
);
```

Set Paragraph element width using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'w-70 bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div style="background-color: #dc3545; width: 490px">Stay RAD!</div>
  </div>
</div>