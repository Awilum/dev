---
title: isBoolean
template: glowyphp/component
description: Determine whether the string is Boolean.
---

```php
/**
 * Determine whether the string is Boolean.
 *
 * Boolean representation for logical strings:
 * 'true', '1', 'on' and 'yes' will return true.
 * 'false', '0', 'off', and 'no' will return false.
 *
 * In all instances, case is ignored.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isBoolean(): bool
```

#### Examples

```php
if (Strings::create('on')->isBoolean()) {
    // do something...
}

if (Strings::create('off')->isBoolean()) {
    // do something...
}
```
