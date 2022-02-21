---
title: d
template: thermage/documentation/element
description: Set Strikethrough element display style.
seo:
  title: Set Strikethrough element display. | d
  description: You may set Strikethrough element display with help of method d
---

```php
/**
 * Set Strikethrough element display style.
 *
 * @param string $value Strikethrough display value.
 *
 * @return self Returns instance of the Strikethrough element class.
 *
 * @access public
 */
public function d(string $value): self
```

#### Examples

Set Strikethrough element display using fluent interface
```php
use function Thermage\ strikethrough;
use function Thermage\render;

// ...

render( 
  strikethrough('Stay RAD!')->d('block')
);
```

Set Strikethrough element display using magic method fluent interface
```php
use function Thermage\ strikethrough;
use function Thermage\render;

// ...

render( 
  strikethrough('Stay RAD!')->dBlock()
);
```

Set Strikethrough element width using magic classes pipeline
```php
use function Thermage\ strikethrough;
use function Thermage\render;

// ...

render( 
  strikethrough('Stay RAD!', 'd-block')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="text-decoration: line-through;">Stay RAD!</div>
  </div>
</div>

By default Strikethrough element display state is `inline`, but you can change it to `block` or `none`.