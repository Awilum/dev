---
title: parseText
template: thermage/documentation/shortcodes
description: Parses text into shortcodes.
seo:
  title: Parses text into shortcodes. | parseText
  description: You may parse text into shortcodes with help of method parseText
---

```php
/**
 * Parses text into shortcodes.
 *
 * @param string $input A text containing Shortcodes
 *
 * @return array Returns array of parsed shortcodes.
 *
 * @access public
 */
public function parseText(string $input): array
```

#### Examples

```php
use Thermage\Thermage;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use function strings;

$shortcodes = Thermage::getShortcodes();

$shortcodesCollection = $shortcodes->parseText('[b]Stay RAD![/b]');
```

[> Read more about shortcodes parsing](https://github.com/thunderer/Shortcode#parsing)
