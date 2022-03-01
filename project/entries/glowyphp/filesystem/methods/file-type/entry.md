---
title: type
template: glowyphp/component
description: Get the file type of a given file.
class: file
---

```php
/**
 * Get the file type of a given file.
 *
 * @return string The file type of a given file.
 */
public function type(): string
```

#### Examples

```php
$result1 = $filesystem->file('/foo/1.txt')->type();
$result2 = $filesystem->file('/foo/1')->type();

echo $result1;
echo $result2;
```

#### The above example will output:

```text
file

dir
```
