---
title: isHexadecimal
template: glowyphp/component
description: Returns true if the string contains only hexadecimal chars, false otherwise.
---

```php
/**
 * Returns true if the string contains only hexadecimal chars, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isHexadecimal(): bool
```

#### Examples

```php
if (Strings::create('19FDE')->isHexadecimal()) {
    // do something...
}
```
