---
title: isDirectory
template: glowyphp/component
description: Determine if the given path is a directory.
class: directory
---

```php
/**
 * Determine if the given path is a directory.
 *
 * @return bool Returns TRUE if the given path exists and is a directory, FALSE otherwise.
 */
public function isDirectory(): bool
```

#### Examples

```php
if ($filesystem->directory('/foo')->isDirectory()) {
    // do something...
}
```
