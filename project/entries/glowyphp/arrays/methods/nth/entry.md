---
title: nth
template: glowyphp/component
description: Extract array items with every nth item from the array.
---

<h2 class="font-normal text-lg">
Extract array items with every nth item from the array.
</h2>

```php
/**
 * Extract array items with every nth item from the array.
 *
 * @param int $step   Step width.
 * @param int $offset Number of items to start from. Default is 0.
 */
public function nth(int $step, int $offset = 0): self
```

#### Examples

```php
$arrays = Arrays::create([1, 2, 3, 4, 5])->nth(2);

print_r($arrays->toArray());

$arrays = Arrays::create([1, 2, 3, 4, 5])->nth(2, 1);

print_r($arrays->toArray());
```

#### The above example will output:

```text
Array
(
    [0] => 1
    [2] => 3
    [4] => 5
)

Array
(
    [1] => 2
    [3] => 4
)
```
