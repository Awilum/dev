---
title: borderColor
template: thermage/documentation/element
description: Set Anchor element border color style.
seo:
  title: Set Anchor element border color style. | borderColor
  description: You may set Anchor element border color style with help of method borderColor
---

```php
/**
 * Set Anchor element border color style.
 *
 * @param string $value Anchor border color style value.
 *
 * @return self Returns instance of the Anchor element class.
 *
 * @access public
 */
public function borderColor(string $value): self
```

#### Examples

Set border style using fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render( 
  anchor('Thermage')
    ->href('https://awilum.github.io/thermage/')
    ->border('square')
    ->borderColor('red')
);
```

Set border style using magic method fluent interface
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')
    ->borderSquare()
    ->borderColorRed()
);
```

Set border color using magic classes pipeline
```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage', 'border-square border-color-red')->href('https://awilum.github.io/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="width: 100%; color: white; text-align: left;"><div style="border: 1px solid red!important; padding-left: 0px; padding-top: 7px; padding-bottom:7px;"><div class="el-a"><a href="https://awilum.github.io/thermage/">Thermage</a></div></div></div>
  </div>
</div>