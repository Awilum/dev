---
title: copy
template: glowyphp/component
description: Copy a directory from one location to another.
class: directory
---

```php
/**
 * Copy a directory from one location to another.
 *
 * @param  string   $destination The destination path.
 * @param  int|null $flags       Flags may be provided which will affect the behavior of some methods.
 *                               A list of the flags can found under FilesystemIterator predefined constants.
 *                               https://www.php.net/manual/en/class.filesystemiterator.php#filesystemiterator.constants
 *
 * @return bool Returns TRUE on success or FALSE on failure.
 */
 public function copy(string $destination, ?int $flags = null): bool
```

#### Examples

```php
$filesystem->directory('/foo')->copy('/bar');
```
