---
title: limit
template: glowyphp/component
description: Extract a slice of the current array with offset 0 and specific length.
---

<h2 class="font-normal text-lg">
Extract a slice of the current array with offset 0 and specific length.
</h2>

```php
/**
 * Extract a slice of the current array with offset 0 and specific length.
 *
 * @param int|null $length       Length of the slice. Default is null.
 * @param bool     $preserveKeys Whether array keys are preserved or no. Default is false.
 */
public function limit(?int $length = null, bool $preserveKeys = false): self
```

#### Examples

```php
$arrays = Arrays::create(['a', 'b', 'c', 'd', 'e'])->limit(3);

$result = $arrays->toArray();

print_r($result);
```

#### The above example will output:

```text
Array
(
    [0] => a
    [1] => b
    [2] => c
)
```
