---
title: merge
template: glowyphp/component
description: Merge the current array with the provided one.
---

<h2 class="font-normal text-lg">
Merge the current array with the provided one.
</h2>

```php
/**
 * Merge the current array with the provided one.
 *
 * @param array $array       Array to merge with (overwrites).
 * @param bool  $recursively Whether array will be merged recursively or no. Default is false.
 */
public function merge(array $array, bool $recursively = false): self
```

#### Examples

```php
$arrays = Arrays::create(['color' => 'red', 2, 4])
                ->merge(['a', 'b', 'color' => 'green', 'shape' => 'trapezoid', 4])
                ->toArray();

$arrays2 = Arrays::create(['color' => ['favorite' => 'red'], 5])
                 ->merge([10, 'color' => ['favorite' => 'green', 'blue']], true)
                 ->toArray();

print_r($arrays);
print_r($arrays2);
```

#### The above example will output:

```text
Array
(
    [color] => green
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [shape] => trapezoid
    [4] => 4
)

Array
(
    [color] => Array
        (
            [favorite] => Array
                (
                    [0] => red
                    [1] => green
                )

            [0] => blue
        )

    [0] => 5
    [1] => 10
)
```
