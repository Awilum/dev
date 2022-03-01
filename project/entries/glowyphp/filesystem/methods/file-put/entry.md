---
title: put
template: glowyphp/component
description: Write the contents of a file.
class: file
---

```php
/**
 * Write the contents of a file.
 *
 * @param  string $data The data to write.
 * @param  bool   $lock Acquire an exclusive lock on the file while proceeding to the writing.
 *
 * @return int|bool Returns the number of bytes that were written to the file, or FALSE on failure.
 */
public function put(string $data, bool $lock = false)
```

#### Examples

```php
$filesystem->file('/foo/1.txt')->put('hello world');
```
