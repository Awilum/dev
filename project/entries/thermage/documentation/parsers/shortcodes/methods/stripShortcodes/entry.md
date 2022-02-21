---
title: stripShortcodes
template: thermage/documentation/shortcodes
description: Strip shortcodes.
seo:
  title: Strip shortcodes. | stripShortcodes
  description: You may strip shortcodes help of method stripShortcodes
---

```php
/**
 * Strip shortcodes.
 *
 * @param string $value Value with shortcodes.
 *
 * @return string Value without shortcodes.
 *
 * @access public
 */
public function stripShortcodes(string $value): string
```

#### Examples

```php
use Thermage\Thermage;

$shortcodes = Thermage::getShortcodes();

$value = $shortcodes->stripShortcodes('[b]Stay RAD![/b]');
```