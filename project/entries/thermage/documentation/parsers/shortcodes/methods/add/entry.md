---
title: add
template: thermage/documentation/shortcodes
description: Add shortcode handler.
seo:
  title: Add shortcode handler. | add
  description: You may add shortcode handler with help of method add
---

```php
/**
 * Add shortcode handler.
 *
 * @param string   $name    Shortcode name.
 * @param callable $handler Shortcode handler.
 *
 * @access public
 */
public function add(string $name, callable $handler): self
```

#### Examples

```php
use Thermage\Thermage;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use function strings;

$shortcodes = Thermage::getShortcodes();

// shortcode: [lower]Stay RAD![/lower]
$shortcodes->add('lower', function (ShortcodeInterface $s) {
  return (string) strings($s->getContent())->lower();
});

// shortcode: [limit chars=4 append="..."]Stay RAD![/limit]
$shortcodes->add('lower', function (ShortcodeInterface $s) {
  return (string) strings($s->getContent())->limit($s->getParameter('chars'), $s->getParameter('append'));
});
```

[> Read more about shortcodes handling](https://github.com/thunderer/Shortcode)
