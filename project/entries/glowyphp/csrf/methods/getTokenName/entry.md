---
title: getTokenName
template: glowyphp/component
description: Get token name.
seo:
  title: Get token name | getTokenName
  description: You may get token name with help of method getTokenName
---

<h2 class="font-normal text-lg">
Get token name.
</h2>

```php
/**
 * Get token name.
 *
 * @return string
 */
public function getTokenName(): string
```

#### Examples

```html
<input type="hidden" name="<?php echo $csrf->getTokenName(); ?>" value="<?php echo $csrf->getTokenValue(); ?>"></input>
```
