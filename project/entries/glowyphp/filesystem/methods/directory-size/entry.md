---
title: size
template: glowyphp/component
description: Gets size of a given directory in bytes.
class: directory
---

```php
/**
 * Gets size of a given directory in bytes.
 *
 * @return int Returns the size of the directory in bytes.
 */
public function size(): int
```

#### Examples

```php
$size = $filesystem->directory('/foo')->size();
```
