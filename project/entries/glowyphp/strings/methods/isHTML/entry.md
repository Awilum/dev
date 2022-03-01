---
title: isHTML
template: glowyphp/component
description: Determine whether the string is IP and it is a valid IP address.
---

```php
/**
 * Determine whether the string is HTML.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isHTML(): bool
```

#### Examples

```php
if (Strings::create('<b>fòôbàřs</b>')->isHTML()) {
    // do something...
}
```
