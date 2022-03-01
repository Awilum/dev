---
title: isAlpha
template: glowyphp/component
description: Returns true if the string contains only alphabetic chars, false otherwise.
---

```php
/**
 * Returns true if the string contains only alphabetic chars, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isAlpha(): bool
```

#### Examples

```php
if (Strings::create('fòôbàřs')->isAlpha()) {
    // do something...
}
```
