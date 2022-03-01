---
title: isBlank
template: glowyphp/component
description: Returns true if the string contains only whitespace chars, false otherwise.
---

```php
/**
 * Returns true if the string contains only whitespace chars, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isBlank(): bool
```

#### Examples

```php
if (Strings::create()->isBlank()) {
    // do something...
}
```
