---
title: isFalse
template: glowyphp/component
description: Determine whether the string is Boolean and it is FALSE.
---

```php
/**
 * Determine whether the string is Boolean and it is FALSE.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isFalse(): bool
```

#### Examples

```php
if (Strings::create('off')->isFalse()) {
    // do something...
}
```
