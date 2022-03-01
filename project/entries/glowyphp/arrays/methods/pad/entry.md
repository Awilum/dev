---
title: pad
template: glowyphp/component
description: Pad the current array to the specified size with a given value.
---

<h2 class="font-normal text-lg">
Pad the current array to the specified size with a given value.
</h2>

```php
/**
 * Pad the current array to the specified size with a given value.
 *
 * @param int   $size  Size of the result array.
 * @param mixed $value Empty value by default.
 *
 * @return self Returns instance of The Arrays class.
 */
public function pad(int $size, $value): self
```

#### Examples

```php
$arrays = Arrays::create([12, 10, 9])->pad(5, 0);

print_r($arrays->toArray());
```

#### The above example will output:

```text
Array
(
    [0] => 12
    [1] => 10
    [2] => 9
    [3] => 0
    [4] => 0
)
```
