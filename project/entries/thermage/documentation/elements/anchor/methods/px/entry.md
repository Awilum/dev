---
title: px
template: thermage/documentation/element
description: Set Anchor padding both style.
seo:
  title: Set Anchor element padding both style. | px
  description: You may set element padding both style with help of method px
---

```php
/**
 * Set Anchor element padding both style.
 *
 * @param int $value Anchor padding both.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function px(int $value): self
```

#### Examples

Set padding both style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://digital.flextype.org/thermage/')->px(10)
);
```

Set padding both style using magic method fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://digital.flextype.org/thermage/')->px10()
);
```

Set padding both style using magic classes pipeline
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render( 
  anchor('Thermage', 'px-10')->href('https://digital.flextype.org/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a" style="margin-left: 40px;"><a href="https://digital.flextype.org/thermage/">Thermage</a></div>
  </div>
</div>