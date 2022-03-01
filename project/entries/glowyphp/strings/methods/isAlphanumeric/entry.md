---
title: isAlphanumeric
template: glowyphp/component
description: Returns true if the string contains only alphabetic and numeric chars, false otherwise.
---

```php
/**
 * Returns true if the string contains only alphabetic and numeric chars, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isAlphanumeric(): bool
```

#### Examples

```php
if (Strings::create('fòôbàřs12345')->isAlphanumeric()) {
    // do something...
}
```
