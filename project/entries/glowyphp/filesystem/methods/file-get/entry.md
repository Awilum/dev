---
title: get
template: glowyphp/component
description: Get the contents of a file.
class: file
---

```php
/**
 * Get the contents of a file.
 * 
 * @param  bool $lock Acquire an exclusive lock on the file while proceeding to the reading.
 *
 * @return string|false The file contents or false on failure.
 */
public function get($lock = false)
```

#### Examples

```php
$content = $filesystem->file('/foo/1.txt')->get();

$sharedContent = $filesystem->file('/foo/2.txt')->get(true);
```
