---
title: replace
template: glowyphp/component
description: Replace values in the current array with values in the given one that have the same key.
---

<h2 class="font-normal text-lg">
Replace values in the current array with values in the given one that have the same key.
</h2>

```php
/**
 * Replace values in the current array with values in the given one
 * that have the same key.
 *
 * @param array $array       Array of replacing values.
 * @param bool  $recursive Whether array will be replaced recursively or no. Default is false.
 */
public function replace(array $array, $recursive = false): self
```

#### Examples

```php
$arrays = Arrays::create(['orange', 'banana', 'apple', 'raspberry'])
                ->replace([0 => 'cherry'])
                ->toArray();

print_r($arrays);

$arrays = Arrays::create(['citrus' => ['orange'], 'berries' => ['blackberry', 'raspberry']])
                ->replace(['citrus' => ['pineapple'], 'berries' => ['blueberry']], true)
                ->toArray();

print_r($arrays);
```

#### The above example will output:

```text
Array
(
    [0] => cherry
    [1] => banana
    [2] => apple
    [3] => raspberry
)
Array
(
    [citrus] => Array
        (
            [0] => pineapple
        )

    [berries] => Array
        (
            [0] => blueberry
            [1] => raspberry
        )

)
```
