---
title: d
template: thermage/documentation/element
description: Set Underline element display style.
seo:
  title: Set Underline element display. | d
  description: You may set Underline element display with help of method d
---

```php
/**
 * Set Underline element display style.
 *
 * @param string $value Underline display value.
 *
 * @return self Returns instance of the Underline element class.
 *
 * @access public
 */
public function d(string $value): self
```

#### Examples

Set Underline element display using fluent interface
```php
use function Thermage\underline;
use function Thermage\render;

// ...

render( 
  underline('Stay RAD!')->d('block')
);
```

Set Underline element display using magic method fluent interface
```php
use function Thermage\underline;
use function Thermage\render;

// ...

render( 
  underline('Stay RAD!')->dBlock()
);
```

Set Underline element width using magic classes pipeline
```php
use function Thermage\underline;
use function Thermage\render;

// ...

render( 
  underline('Stay RAD!', 'd-block')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="text-decoration: underline;">Stay RAD!</div>
  </div>
</div>

By default Underline element display state is `inline`, but you can change it to `block` or `none`.