---
title: isSerialized
template: glowyphp/component
description: Returns true if the string contains only punctuation chars, false otherwise.
---

```php
/**
 * Returns true if the string is serialized, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isSerialized(): bool
```

#### Examples

```php
if (Strings::create('s:11:"fòôbàřs";'))->isSerialized()) {
    // do something...
}
```
