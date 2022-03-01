---
title: prepend
template: glowyphp/component
description: Prepend to a file.
class: file
---

```php
/**
 * Prepend to a file.
 *
 * @param  string $data The data to write.
 *
 * @return int|bool Returns the number of bytes that were written to the file, or FALSE on failure.
 */
public function prepend(string $data)
```

#### Examples

```php
$filesystem->file('/foo/1.txt')->prepend('hello ');
```
