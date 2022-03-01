---
title: lastModified
template: glowyphp/component
description: Get the file's last modification time.
class: file
---

```php
/**
 * Get the file's last modification time.
 *
 * @return int Returns the time the file was last modified.
 */
public function lastModified(): int
```

#### Examples

```php
$result = $filesystem->file('/foo/1.txt')->lastModified();
```
