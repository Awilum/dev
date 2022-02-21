---
title: italic
template: thermage/documentation/element
description: Set Paragraph element italic style.
seo:
  title: Set Paragraph element italic style. | blink
  description: You may set element italic style with help of method blink
---

```php
/**
 * Set Paragraph element italic style.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function italic(): self
```

#### Examples

Set italic style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->italic()
);
```

Set italic style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'italic')
);
```

Set italic style using shortcodes
```php 
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('[italic]Stay RAD![/italic]').
  paragraph('[i]Stay RAD![/i]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="font-style: italic;">Stay RAD!</div>
  </div>
</div>