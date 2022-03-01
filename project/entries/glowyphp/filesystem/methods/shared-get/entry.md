---
title: sharedGet
template: glowyphp/component
description: Get contents of a file with shared access.
class: file
---

```php
/**
 * Get contents of a file with shared access.
 * 
 * @return string|false The file contents or false on failure.
 */
public function sharedGet()
```

#### Examples

```php
$sharedContent = $filesystem->file('/foo/2.txt')->sharedGet();
```
