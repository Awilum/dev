---
title: isAscii
template: glowyphp/component
description: Returns true if the string contains ASCII, false otherwise.
---

```php
/**
 * Returns true if the string contains ASCII, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isAscii(): bool
```

#### Examples

```php
if (Strings::create('#@$%')->isAscii()) {
    // do something...
}
```
