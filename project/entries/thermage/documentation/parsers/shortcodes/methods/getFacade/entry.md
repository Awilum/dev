---
title: getFacade
template: thermage/documentation/shortcodes
description: Get Shortcodes Facade.
seo:
  title: Get Shortcodes Facade. | addEvent
  description: You may get shortcodes facade with help of method addEvent
---

```php
/**
 * Get Shortcodes Facade.
 *
 * @return ShortcodeFacade Shortcodes instance.
 *
 * @access public
 */
public function getFacade(): ShortcodeFacade
```

#### Examples

```php
use Thermage\Thermage;

$shortcodesFacade = Thermage::getShortcodes()->getFacade();
```

[> Read more about shortcodes facade](https://github.com/thunderer/Shortcode#facade)
