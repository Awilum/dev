---
title: isIP
template: glowyphp/component
description: Determine whether the string is IP and it is a valid IP address.
---

```php
/**
 * Determine whether the string is IP and it is a valid IP address.
 *
 * @param $flags Flags:
 *                  FILTER_FLAG_IPV4
 *                  FILTER_FLAG_IPV6
 *                  FILTER_FLAG_NO_PRIV_RANGE
 *                  FILTER_FLAG_NO_RES_RANGE
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isIP(int $flags = FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6): bool
```

#### Examples

```php
if (Strings::create('127.0.0.1')->isIP()) {
    // do something...
}
```
