---
title: extension
template: glowyphp/component
description: Get the file extension from a file path.
class: file
---

```php
/**
 * Get the file extension from a file path.
 *
 * @return string The extension of a given file.
 */
public function extension(): string
```

#### Examples

```php
$result = $filesystem->file('/foo/1.txt')->extension();

echo $result;
```

#### The above example will output:

```text
txt
```
