---
title: isPunctuation
template: glowyphp/component
description: Returns true if the string contains only punctuation chars, false otherwise.
---

```php
/**
 * Returns true if the string contains only punctuation chars, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isPunctuation(): bool
```

#### Examples

```php
if (Strings::create(',')->isPunctuation()) {
    // do something...
}
```
