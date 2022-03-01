---
title: isMAC
template: glowyphp/component
description: Determine whether the string is MAC address and it is a valid MAC address.
---

```php
/**
 * Determine whether the string is MAC address and it is a valid MAC address.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isMAC(): bool
```

#### Examples

```php
if (Strings::create('00:11:22:33:44:55')->isMAC()) {
    // do something...
}
```
