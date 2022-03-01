---
title: move
template: glowyphp/component
description: Move a file to a new location.
class: file
---

```php
/**
 * Move a file to a new location.
 *
 * @param  string $destination The destination path.
 *
 * @return bool Returns TRUE on success or FALSE on failure.
 */
public function move(string $destination): bool
```

#### Examples

```php
$filesystem->file('/foo/1.txt')->move('/foo/2.txt');
```
