---
title: mr
template: thermage/documentation/element
description: Set Span margin right style.
seo:
  title: Set Span element margin right style. | mr
  description: You may set element margin right style with help of method mr
---

```php
/**
 * Set Span element margin right style.
 *
 * @param int $value Span margin right.
 *
 * @return self Returns instance of the Span element class.
 *
 * @access public
 */
public function mr(int $value): self
```

#### Examples

Set margin right style using fluent interface
```php
render( 
  span('Stay RAD!')->mr(10)
);
```

Set margin right style using magic method fluent interface
```php
render( 
  span('Stay RAD!')->mr10()
);
```

Set margin right style using magic classes pipeline
```php
render( 
  span('Stay RAD!', 'mr-10')
);
```

Set margin right style using shortcodes
```php 
render( 
  span('[mr=10]Stay RAD![/mr]')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div">Stay RAD!</div>
  </div>
</div>