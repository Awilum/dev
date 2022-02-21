---
title: blink
template: thermage/documentation/element
description: Set Paragraph element blink style.
seo:
  title: Set Paragraph element blink style. | blink
  description: You may set element blink style with help of method blink
---

```php
/**
 * Set Paragraph element blink style.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function blink(): self
```

#### Examples

Set blink style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->blink()
);
```

Set blink style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'blink')
);
```

Set blink style using shortcodes
```php 
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('[blink]Stay RAD![/blink]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div blink">Stay RAD!</div>
  </div>
</div>