---
title: reverse
template: thermage/documentation/element
description: Set Paragraph element reverse property.
seo:
  title: Set Paragraph element reverse property. | reverse
  description: You may set Paragraph element reverse property with help of method reverse
---

```php
/**
 * Set Paragraph element reverse style.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function reverse(): self
```

#### Examples


Set reverse style using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->reverse()
);
```

Set reverse style using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'reverse')
);
```

Set reverse style using shortcodes
```php 
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('[reverse]Stay RAD![/reverse]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="background: white; color: black;">Stay RAD!</div>
  </div>
</div>