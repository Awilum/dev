---
title: strikethrough
template: thermage/documentation/element
description: Set Paragraph element strikethrough style.
seo:
  title: Set Paragraph element strikethrough style. | strikethrough
  description: You may set Paragraph element strikethrough style with help of method strikethrough
---

```php
/**
 * Set Paragraph element strikethrough style.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function strikethrough(): self
```

#### Examples

Set strikethrough style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->strikethrough()
);
```

Set strikethrough style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'strikethrough')
);
```

Set strikethrough style using shortcodes
```php 
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('[strikethrough]Stay RAD![/strikethrough]').
  paragraph('[s]Stay RAD![/s]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="text-decoration: line-through;">Stay RAD!</div>
  </div>
</div>