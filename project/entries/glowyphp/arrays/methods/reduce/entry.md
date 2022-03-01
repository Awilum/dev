---
title: reduce
template: glowyphp/component
description: Reduce the array to a single value iteratively combining all values using $callback.
---

<h2 class="font-normal text-lg">
Reduce the array to a single value iteratively combining all values using $callback.
</h2>

```php
/**
 * Reduce the array to a single value iteratively combining all values using $callback.
 *
 * @param callable   $callback Callback with ($carry, $item)
 * @param mixed|null $initial  If the optional initial is available,
 *                             it will be used at the beginning of the process,
 *                             or as a final result in case the array is empty.
 */
public function reduce(callable $callback, $initial = null)
```

#### Examples

```php
$result = Arrays::create([2, 2])
                ->reduce(function ($carry, $item) {
                    $carry += $item;
                    return $carry;
                });

print_r($result);
```

#### The above example will output:

```text
4
```
