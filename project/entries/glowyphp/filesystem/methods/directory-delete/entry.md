---
title: delete
template: glowyphp/component
description: Delete a directory.
class: directory
---

```php
/**
 * Delete a directory.
 *
 * @param  string $directory Directory to delete.
 * @param  bool   $preserve  The directory itself may be optionally preserved.
 *
 * @return bool Returns TRUE on success or FALSE on failure.
 */
public function delete(bool $preserve = false): bool
```

#### Examples

```php
$filesystem->directory('/foo')->delete();
```
