---
title: isTrue
template: glowyphp/component
description: Determine whether the string is Boolean and it is TRUE.
---

```php
/**
 * Determine whether the string is Boolean and it is TRUE.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isTrue(): bool
```

#### Examples

```php
if (Strings::create('on')->isTrue()) {
    // do something...
}
```
