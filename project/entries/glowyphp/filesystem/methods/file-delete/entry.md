---
title: delete
template: glowyphp/component
description: Delete the file at a given path.
class: file
---

```php
/**
 * Delete the file at a given path.
 *
 * @return bool Returns true or false if any of them is failure.
 */
public function delete(): bool
```

#### Examples

```php
$filesystem->file('/foo/1.txt')->delete();
```
