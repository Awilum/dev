---
title: lastAccess
template: glowyphp/component
description: Get the file's last access time.
class: file
---

```php
/**
 * Get the file's last access time.
 *
 * @return int Returns the time the file was last assecc.
 */
public function lastAccess(): int
```

#### Examples

```php
$result = $filesystem->file('/foo/1.txt')->lastAccess();
```
