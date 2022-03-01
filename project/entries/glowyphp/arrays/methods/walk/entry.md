---
title: walk
template: glowyphp/component
description: Apply the given function to the every element of the current array, discarding the results.
---

<h2 class="font-normal text-lg">
Apply the given function to the every element of the current array, discarding the results.
</h2>

```php
/**
 * Apply the given function to the every element of the current array,
 * discarding the results.
 *
 * @param callable $callback  The callback function.
 * @param bool     $recursive Whether array will be walked recursively or no. Default is false.
 *
 * @return self Returns instance of The Arrays class.
 */
public function walk(callable $callback, bool $recursive = false): self
```

#### Examples

```php
$arrays = Arrays::create(["a" => "lemon", "b" => "orange", "c" => "banana"])
                ->walk(function(&$value, $key) {
                    $value = $key;
                })
                ->toArray();

print_r($arrays);
```

#### The above example will output:

```text
Array
(
    [a] => a
    [b] => b
    [c] => c
)
```
