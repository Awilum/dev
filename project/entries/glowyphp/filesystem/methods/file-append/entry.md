---
title: append
template: glowyphp/component
description: Append to a file.
class: file
---

```php
/**
 * Append to a file.
 *
 * @param  string $data The data to write.
 *
 * @return int|bool Returns the number of bytes that were written to the file, or FALSE on failure.
 */
public function append(string $data)
```

#### Examples

```php
$filesystem->file('/foo/1.txt')->append(' world');
```
