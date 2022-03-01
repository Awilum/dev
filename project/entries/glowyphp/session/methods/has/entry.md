---
title: has
template: glowyphp/component
description: Returns true if the key exists.
---

```php
/**
 * Returns true if the key exists.
 *
 * @param string $key The key.
 *
 * @return bool true if the key is defined, false otherwise.
 */
public function has(string $key): bool
```

#### Examples

```php
if ($session->has('foo')) {
    // do someting...
}
```
