---
title: create
template: glowyphp/component
description: Create a directory.
class: directory
---

```php
/**
 * Create a directory.
 *
 * @param  int  $mode      The mode is 0777 by default, which means the widest possible access.
 * @param  bool $recursive Allows the creation of nested directories specified in the path.
 *
 * @return bool Returns TRUE on success or FALSE on failure.
 */
public function create(int $mode = 0755, bool $recursive = false): bool
```

#### Examples

```php
$filesystem->directory('/foo')->create();
$filesystem->directory('/foo')->create(0755);
$filesystem->directory('/foo/bar')->create(0755, true);
```
