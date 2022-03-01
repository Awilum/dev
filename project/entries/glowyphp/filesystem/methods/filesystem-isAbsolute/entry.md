---
title: isAbsolute
template: glowyphp/component
description: Determine if the given path is absolute path.
class: filesystem
---

```php
/**
 * Determine if the given path is absolute path.
 *
 * @param  string $path Path to check.
 *
 * @return bool Returns TRUE if the given path is absolute path, FALSE otherwise.
 */
 public function isAbsolute(string $path): bool
```

#### Examples

```php
if ($filesystem->isAbsolute('remote://file')) {
    // do something...
}
```
