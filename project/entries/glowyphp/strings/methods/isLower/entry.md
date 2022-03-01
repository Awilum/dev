---
title: isLower
template: glowyphp/component
description: Returns true if the string contains only lower case chars, false otherwise.
---

```php
/**
 * Returns true if the string contains only lower case chars, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isLower(): bool
```

#### Examples

```php
if (Strings::create('fòôbàřs')->isLower()) {
    // do something...
}
```
