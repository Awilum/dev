---
title: name
template: glowyphp/component
description: Get the file name from a file path.
class: file
---

```php
/**
 * Get the file name from a file path.
 *
 * @return string The file name of a given file.
 */
public function name(): string
```

#### Examples

```php
$result = $filesystem->file('/foo/1.txt')->name();

echo $result;
```

#### The above example will output:

```text
1
```
