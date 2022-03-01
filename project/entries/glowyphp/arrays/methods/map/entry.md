---
title: map
template: glowyphp/component
description: Apply the given $callback function to the every element of the current array, collecting the results.
---

<h2 class="font-normal text-lg">
Apply the given $callback function to the every element of the current array, collecting the results.
</h2>

```php
/**
 * Apply the given $callback function to the every element of the current array,
 * collecting the results.
 *
 * @param callable $callback The callback function.
 */
public function map(callable $callback): self
```

#### Examples

```php
$arrays = Arrays::create([1, 2, 3, 4, 5])
                ->map(function ($n) {
                    return ($n * $n * $n);
                })->toArray();

print_r($arrays);
```

#### The above example will output:

```text
Array
(
    [0] => 1
    [1] => 8
    [2] => 27
    [3] => 64
    [4] => 125
)
```
