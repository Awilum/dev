---
title: filter
template: glowyphp/component
description: Filter the current array for elements satisfying the predicate $callback function.
---

<h2 class="font-normal text-lg">
Filter the current array for elements satisfying the predicate $callback function.
</h2>

```php
/**
 * Filter the current array for elements satisfying the predicate $callback function.
 *
 * @param callable $callback The callback function.
 * @param int      $flag     Determining what arguments are sent to callback:
 *                             ARRAY_FILTER_USE_KEY - pass key as the only argument
 *                                                    to callback instead of the value.
 *                             ARRAY_FILTER_USE_BOTH - pass both value and key as arguments
 *                                                     to callback instead of the value.
 *
 * @return self Returns instance of The Arrays class.
 */
public function filter(callable $callback, int $flag = ARRAY_FILTER_USE_BOTH): self
```

#### Examples

```php
$arrays = Arrays::create([6, 7, 8, 9, 10, 11, 12])->filter(function($var) {
                            return !($var & 1);
                        })->toArray();

print_r($arrays);
```

#### The above example will output:

```text
Array
(
    [0] => 6
    [2] => 8
    [4] => 10
    [6] => 12
)
```
