---
title: isWindowsPath
template: glowyphp/component
description: Determine if the given path is absolute path.
class: filesystem
---

```php
/**
 * Determine if the given path is a Windows path.
 *
 * @param  string $path Path to check.
 *
 * @return bool true if windows path, false otherwise
 */
public function isWindowsPath(string $path): bool
```

#### Examples

```php
if ($filesystem->isWindowsPath('C:\file\1.txt')) {
    // do something...
}
```
