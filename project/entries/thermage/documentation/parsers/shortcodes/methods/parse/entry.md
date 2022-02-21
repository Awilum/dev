---
title: parse
template: thermage/documentation/shortcodes
description: Parse and processes text to replaces shortcodes.
seo:
  title: Parse and processes text to replaces shortcodes. | parse
  description: You may parse and processes text to replaces shortcodes with help of method parse
---

```php
/**
 * Parse and processes text to replaces shortcodes.
 *
 * @param string $input A text containing Shortcodes
 *
 * @return string Returns parses and processed text.
 *
 * @access public
 */
public function parse(string $input): string
```

#### Examples

```php
use Thermage\Thermage;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use function strings;

$shortcodes = Thermage::getShortcodes();

$result = $shortcodes->parse('[b]Stay RAD![/b]');
```

[> Read more about shortcodes parsing](https://github.com/thunderer/Shortcode#parsing)
