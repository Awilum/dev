---
title: italic
template: thermage/documentation/element
description: Set Anchor element italic style.
seo:
  title: Set Anchor element italic style. | blink
  description: You may set element italic style with help of method blink
---

```php
/**
 * Set Anchor element italic style.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function italic(): self
```

#### Examples

Set italic style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://digital.flextype.org/thermage/')->italic()
);
```

Set italic style using magic classes pipeline
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage', 'italic')->href('https://digital.flextype.org/thermage/')
);
```

Set italic style using shortcodes
```php 
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('[italic]Thermage[/italic]')->href('https://digital.flextype.org/thermage/').
  anchor('[i]Thermage[/i]')->href('https://digital.flextype.org/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a" style="font-style: italic;"><a href="https://digital.flextype.org/thermage/">Thermage</a></div>
  </div>
</div>