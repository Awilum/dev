---
title: copy
template: glowyphp/component
description: Copy a file to a new location.
class: file
---

```php
/**
 * Copy a file to a new location.
 *
 * @param  string $destination The destination path.
 *                             If the destination file already exists, it will be overwritten.
 *
 * @return bool Returns TRUE on success or FALSE on failure.
 */
public function copy(string $destination): bool
```

#### Examples

```php
$filesystem->file('/foo/1.txt')->copy('/foo/2.txt');
```
