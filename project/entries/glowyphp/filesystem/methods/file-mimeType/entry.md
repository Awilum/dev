---
title: mimeType
template: glowyphp/component
description: Get the mime-type of a given file.
class: file
---

```php
/**
 * Get the mime-type of a given file.
 *
 * @return string The mime-type of a given file.
 */
public function mimeType(): string
```

#### Examples

```php
$result = $filesystem->file('/foo/1.txt')->mimeType();

echo $result;
```

#### The above example will output:

```text
text/plain
```
