---
title: isWritable
template: glowyphp/component
description: Determine if the given path is writable.
class: file
---

```php
/**
 * Determine if the given path is writable.
 *
 * @return bool Returns TRUE if the given path exists and is writable, FALSE otherwise.
 */
public function isWritable(): bool
```

#### Examples

```php
if ($filesystem->file('/foo/1.txt')->isWritable()) {
    // do something...
}
```
