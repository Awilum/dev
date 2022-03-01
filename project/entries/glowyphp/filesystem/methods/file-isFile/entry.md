---
title: isFile
template: glowyphp/component
description: Determine if the given path is a regular file.
class: file
---

```php
/**
 * Determine if the given path is a regular file.
 *
 * @return bool Returns TRUE if the filename exists and is a regular file, FALSE otherwise.
 */
public function isFile(): bool
```

#### Examples

```php
if ($filesystem->file('/foo/1.txt')->isFile()) {
    // do something...
}
```
