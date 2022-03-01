---
title: isEqual
template: glowyphp/component
description: Determine whether the string is equals to $string.
---

```php
/**
 * Determine whether the string is equals to $string.
 *
 * @param $string String to compare.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isEqual(string $string): bool
```

#### Examples

```php
if (Strings::create('fòôbàřs')->isEqual('fòôbàřs')) {
    // do something...
}
```
