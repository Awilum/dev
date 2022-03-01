---
title: isJson
template: glowyphp/component
description: Returns true if the string is JSON, false otherwise.
---

```php
/**
 * Returns true if the string is JSON, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isJson(): bool
```

#### Examples

```php
if (Strings::create('{"yaml": "json"}'))->isJson()) {
    // do something...
}
```
