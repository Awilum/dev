---
title: isDigit
template: glowyphp/component
description: Returns true if the string contains only digit chars, false otherwise.
---

```php
/**
 * Returns true if the string contains only digit chars, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isDigit(): bool
```

#### Examples

```php
if (Strings::create('01234569')->isDigit()) {
    // do something...
}
```
