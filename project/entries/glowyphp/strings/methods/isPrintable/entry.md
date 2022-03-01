---
title: isPrintable
template: glowyphp/component
description: Returns true if the string contains only printable (non-invisible) chars, false otherwise.
---

```php
/**
 * Returns true if the string contains only printable (non-invisible) chars, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isPrintable(): bool
```

#### Examples

```php
if (Strings::create('LKA#@%.54')->isPrintable()) {
    // do something...
}
```
