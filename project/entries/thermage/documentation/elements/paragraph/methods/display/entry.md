---
title: display
template: thermage/documentation/element
description: Set Paragraph element display style.
seo:
  title: Set Paragraph element display. | display
  description: You may set Paragraph element display with help of method display
---

```php
/**
 * Set Paragraph element display style.
 *
 * @param string $value Paragraph display value.
 *
 * @return self Returns instance of the Paragraph element class.
 *
 * @access public
 */
public function d(string $value): self
```

#### Examples

Set Paragraph element display using fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->d('block')->bg('red')
);
```

Set Paragraph element display using magic method fluent interface
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!')->dBlock()->bgRed()
);
```

Set Paragraph element width using magic classes pipeline
```php
use function Thermage\paragraph;
use function Thermage\render;

// ...

render( 
  paragraph('Stay RAD!', 'd-block bg-red')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div style="background-color: #dc3545; width: 100%">Stay RAD!</div>
  </div>
</div>

By default Paragraph element display state is `block`, but you can change it to `inline` or `none`.