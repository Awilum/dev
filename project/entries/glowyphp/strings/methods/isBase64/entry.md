---
title: isBase64
template: glowyphp/component
description: Returns true if the string is base64 encoded, false otherwise.
---

```php
/**
 * Returns true if the string is base64 encoded, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isBase64(): bool
```

#### Examples

```php
if (Strings::create('ZsOyw7Riw6DFmXM='))->isBase64()) {
    // do something...
}
```
