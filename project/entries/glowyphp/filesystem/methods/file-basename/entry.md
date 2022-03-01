---
title: basename
template: glowyphp/component
description: Get the trailing name component from a file path.
class: file
---

```php
/**
 * Get the trailing name component from a file path.
 *
 * @return string The trailing name of a given file.
 */
public function basename(): string
```

#### Examples

```php
$result = $filesystem->file('/foo/1.txt')->basename();

echo $result;
```

#### The above example will output:

```text
1.txt
```
