---
title: chmod
template: glowyphp/component
description: Get/Set UNIX mode of a directory.
class: directory
---

```php
/**
 * Get/Set UNIX mode of a directory.
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
$filesystem->directory('/foo')->chmod(0755);
```
