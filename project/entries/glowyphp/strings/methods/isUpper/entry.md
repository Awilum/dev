---
title: isUpper
template: glowyphp/component
description: Returns true if the string contains only upper case chars, false otherwise.
---

```php
/**
 * Returns true if the string contains only upper case chars, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isUpper(): bool
```

#### Examples

```php
if (Strings::create('FOOBAR')->isUpper()) {
    // do something...
}
```
