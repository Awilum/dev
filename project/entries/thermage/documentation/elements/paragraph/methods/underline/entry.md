---
title: underline
template: thermage/documentation/element
description: Set Paragraph element underline style.
seo:
  title: Set Paragraph element underline style. | underline
  description: You may set Paragraph element underline style with help of method underline
---

```php
/**
 * Set Paragraph element underline style.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function underline(): self
```

#### Examples

Set underline style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->underline()
);
```

Set underline style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'underline')
);
```

Set underline style using shortcodes
```php 
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('[underline]Stay RAD![/underline]').
  paragraph('[u]Stay RAD![/u]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="text-decoration: underline;">Stay RAD!</div>
  </div>
</div>