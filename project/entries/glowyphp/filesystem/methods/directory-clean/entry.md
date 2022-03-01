---
title: clean
template: glowyphp/component
description: Empty the specified directory of all files and directories.
class: directory
---

```php
/**
 * Empty the specified directory of all files and directories.
 *
 * @param  string $directory Directory to cleanup.
 *
 * @return bool Returns TRUE on success or FALSE on failure.
 */
public function clean(): bool
```

#### Examples

```php
$filesystem->directory('/foo')->clean();
```
