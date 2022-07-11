---
title: href
template: thermage/documentation/element
description: Set Anchor element href.
seo:
  title: Set Anchor element href. | href
  description: You may set Anchor element href with help of method href
---

```php
/**
 * Set anchor href.
 *
 * @param string $value Href value.
 *
 * @return self Returns instance of the Anchor class.
 *
 * @access public
 */
public function href(string $value): self
```

#### Examples

```php
use function Thermage\anchor;
use function Thermage\render;

// ...

render(
  anchor('Thermage')->href('https://awilum.github.io/thermage/')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-a"><a href="https://awilum.github.io/thermage/">Thermage</a></div>
  </div>
</div>