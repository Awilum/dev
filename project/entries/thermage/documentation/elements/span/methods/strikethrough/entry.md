---
title: strikethrough
template: thermage/documentation/element
description: Set Span element strikethrough style.
seo:
  title: Set Span element strikethrough style. | strikethrough
  description: You may set Span element strikethrough style with help of method strikethrough
---

```php
/**
 * Set Span element strikethrough style.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function strikethrough(): self
```

#### Examples

Set strikethrough style using fluent interface
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!')->strikethrough()
);
```

Set strikethrough style using magic classes pipeline
```php
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('Stay RAD!', 'strikethrough')
);
```

Set strikethrough style using shortcodes
```php 
use function Thermage\span;
use function Thermage\render;

// ...

render( 
  span('[strikethrough]Stay RAD![/strikethrough]').
  span('[s]Stay RAD![/s]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="text-decoration: line-through;">Stay RAD!</div>
  </div>
</div>