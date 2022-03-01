---
title: hash
template: glowyphp/component
description: Get the MD5 hash of the file at the given path.
class: file
---

```php
/**
 * Get the MD5 hash of the file at the given path.
 *
 * @return string Returns a string on success, FALSE otherwise.
 */
public function hash(): string
```

#### Examples

```php
$result = $filesystem->file('/foo/1.txt')->hash();

echo $result;
```

#### The above example will output:

```text
098f6bcd4621d373cade4e832627b4f6
```
