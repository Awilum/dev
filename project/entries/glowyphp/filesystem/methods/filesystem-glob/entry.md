---
title: glob
template: glowyphp/component
description: Find path names matching a given pattern.
class: filesystem
---

```php
/**
 * Find path names matching a given pattern.
 *
 * @param  string $pattern The pattern.
 * @param  int    $flags   Valid flags.
 *
 * @return array Returns an array containing the matched files/directories, an empty array if no file matched.
 */
public function glob(string $pattern, int $flags = 0): array
```

#### Examples

```php
$result = $filesystem->glob('/foo/*.txt');
```
