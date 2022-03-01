---
title: chmod
template: glowyphp/component
description: Get/Set UNIX mode of a file.
class: file
---

```php
/**
 * Get/Set UNIX mode of a file.
 *
 * @param  int|null $mode The mode parameter consists of three octal number components
 *                        specifying access restrictions for the owner, the user group
 *                        in which the owner is in, and to everybody else in this order.
 *
 * @return mixed
 */
public function chmod(?int $mode = null)
```

#### Examples

```php
$filesystem->file('/foo/1.txt')->chmod(0755);
```
