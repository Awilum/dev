---
title: size
template: glowyphp/component
description: Gets file size in bytes.
class: file
---

```php
/**
 * Gets file size in bytes.
 *
 * @return int Returns the size of the file in bytes.
 */
public function size(): int
```

#### Examples

```php
$result = $filesystem->file('/foo/1.txt')->size();
```
