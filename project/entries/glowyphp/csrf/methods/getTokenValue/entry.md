---
title: getTokenValue
template: glowyphp/component
description: Get token value.
seo:
  title: Get token value | getTokenValue
  description: You may get token value with help of method getTokenValue
---

<h2 class="font-normal text-lg">
Get token value.
</h2>

```php
/**
 * Get token value.
 *
 * @return string
 */
public function getTokenValue(): string
```

#### Examples

```html
<input type="hidden" name="<?php echo $csrf->getTokenName(); ?>" value="<?php echo $csrf->getTokenValue(); ?>" />
```
