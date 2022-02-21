---
title: strikethrough
template: thermage/documentation/element
description: Set Anchor element strikethrough style.
seo:
  title: Set Anchor element strikethrough style. | strikethrough
  description: You may set Anchor element strikethrough style with help of method strikethrough
---

```php
/**
 * Set Anchor element strikethrough style.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function strikethrough(): self
```

#### Examples

Set strikethrough style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://digital.flextype.org/thermage/')->strikethrough()
);
```

Set strikethrough style using magic classes pipeline
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render( 
  anchor('Thermage', 'strikethrough')
);
```

Set strikethrough style using shortcodes
```php 
use function Thermage\anchor;
use function Thermage\render;

// ...

render( 
  anchor('[strikethrough]Thermage[/strikethrough]')->href('https://digital.flextype.org/thermage/').
  anchor('[s]Thermage[/s]')->href('https://digital.flextype.org/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a" style="text-decoration: line-through;"><a href="https://digital.flextype.org/thermage/">Thermage</a></div>
  </div>
</div>