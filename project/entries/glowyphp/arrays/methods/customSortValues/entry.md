---
title: customSortValues
template: glowyphp/component
description: Sorts the array values with a user-defined comparison function and maintain index association.
---

<h2 class="font-normal text-lg">
Sorts the array values with a user-defined comparison function and maintain index association.
</h2>

```php
/**
 * Sorts the array values with a user-defined comparison function and maintain index association.
 *
 * @return self Returns instance of The Arrays class.
 */
public function customSortValues(callable $callback): self
```

#### Examples

```php
$arrays = Arrays::create(['b', 'a', 'c'])
              ->customSortValues(static function ($a, $b) {
                    if ($a === $b) {
                        return 0;
                    }
                    return $a < $b ? -1 : 1;
              })->toArray()

print_r($arrays);
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
