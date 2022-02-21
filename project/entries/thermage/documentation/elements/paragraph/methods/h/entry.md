---
title: h
template: thermage/documentation/element
description: Set Paragraph element height.
seo:
  title: Set Paragraph element height. | h
  description: You may set Paragraph element height with help of method h
---

```php
/**
 * Set Paragraph element height
 *
 * @param int $value Paragraph height.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function h(int $value): self
```

#### Examples

Set Paragraph element height using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->h(7)->bgRed()
);
```

Set Paragraph element height using magic method fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->h7()->bgRed()
);
```

Set Paragraph element height using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'h-7 bg-red')
);
```

<paragraph class="terminal">
  <paragraph class="terminal-header">Terminal</paragraph>
  <paragraph class="terminal-body">
    <paragraph class="terminal-command">$ php thermage.php</paragraph>
    <paragraph style="background-color: #dc3545; width: 100%; height: 105px; align-items: center; display: flex;">Stay RAD!</paragraph>
  </paragraph>
</paragraph>