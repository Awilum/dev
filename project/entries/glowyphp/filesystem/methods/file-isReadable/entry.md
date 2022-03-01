---
title: isReadable
template: glowyphp/component
description: Determine if the given path is readable.
class: file
---

```php
/**
 * Determine if the given path is readable.
 *
 * @return bool Returns TRUE if the given path exists and is readable, FALSE otherwise.
 */
public function isReadable(): bool
```

#### Examples

```php
if ($filesystem->file('/foo/1.txt')->isReadable()) {
    // do something...
}
```
