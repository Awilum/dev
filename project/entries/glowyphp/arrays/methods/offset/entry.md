---
title: offset
template: glowyphp/component
description: Extract a slice of the current array with specific offset.
---

<h2 class="font-normal text-lg">
Extract a slice of the current array with specific offset.
</h2>

```php
/**
 * Extract a slice of the current array with specific offset.
 *
 * @param int      $offset       Slice begin index.
 * @param bool     $preserveKeys Whether array keys are preserved or no. Default is false.
 */
public function offset(int $offset, bool $preserveKeys = false): self
```

#### Examples

```php
$arrays = Arrays::create(['a', 'b', 'c', 'd', 'e'])->offset(3);

$result = $arrays->toArray();

print_r($result);
```

#### The above example will output:

```text
Array
(
    [0] => d
    [1] => e
)
```
