---
title: move
template: glowyphp/component
description: Move a directory.
class: directory
---

```php
/**
 * Move a directory.
 *
 * @param  string $destination The destination path.
 *
 * @return bool Returns TRUE on success or FALSE on failure.
 */
public function move(string $destination): bool
```

#### Examples

```php
$filesystem->directory('/foo')->move('/bar');
```
