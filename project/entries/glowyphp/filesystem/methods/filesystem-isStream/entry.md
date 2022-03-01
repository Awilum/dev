---
title: isStream
template: glowyphp/component
description: Determine if the given path is a stream path.
class: filesystem
---

```php
/**
 * Determine if the given path is a stream path.
 *
 * @param  string $path Path to check.
 *
 * @return bool Returns TRUE if the given path is stream path, FALSE otherwise.
 */
public function isStream(string $path): bool
```

#### Examples

```php
if ($filesystem->isStream('file://1.txt')) {
    // do something...
}
```
