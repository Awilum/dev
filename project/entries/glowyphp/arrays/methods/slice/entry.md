---
title: slice
template: glowyphp/component
description: Extract a slice of the current array.
---

<h2 class="font-normal text-lg">
Extract a slice of the current array.
</h2>

```php
/**
 * Extract a slice of the current array.
 *
 * @param int      $offset       Slice begin index.
 * @param int|null $length       Length of the slice. Default is null.
 * @param bool     $preserveKeys Whether array keys are preserved or no. Default is false.
 */
public function slice(int $offset, ?int $length = null, bool $preserveKeys = false): self
```

#### Examples

```php
$arrays = Arrays::create(['a', 'b', 'c', 'd', 'e'])->slice(0, 3)->toArray();

print_r($arrays);
```
