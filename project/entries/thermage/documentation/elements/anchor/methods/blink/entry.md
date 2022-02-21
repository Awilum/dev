---
title: blink
template: thermage/documentation/element
description: Set Anchor element blink style.
seo:
  title: Set Anchor element blink style. | blink
  description: You may set element blink style with help of method blink
---

```php
/**
 * Set Anchor element blink style.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function blink(): self
```

#### Examples

Set blink style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://digital.flextype.org/thermage/')->blink()
);
```

Set blink style using magic classes pipeline
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage', 'blink')->href('https://digital.flextype.org/thermage/')
);
```

Set blink style using shortcodes
```php 
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('[blink]Thermage[/blink]')->href('https://digital.flextype.org/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a blink"><a href="https://digital.flextype.org/thermage/">Thermage</a></div>
  </div>
</div>