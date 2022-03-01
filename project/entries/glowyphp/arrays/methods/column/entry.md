---
title: column
template: glowyphp/component
description: Get the values of a single column from an arrays items.
---

<h2 class="font-normal text-lg">
Get the values of a single column from an arrays items.
</h2>

```php
/**
 * Get the values of a single column from an arrays items.
 *
 * @param mixed $columnKey The column of values to return.
 *                         This value may be an integer key of the column you wish to retrieve,
 *                         or it may be a string key name for an associative array or property name.
 *                         It may also be NULL to return complete arrays or objects
 *                         (this is useful together with index_key to reindex the array).
 * @param mixed $indexKey  The column to use as the index/keys for the returned array.
 *                         This value may be the integer key of the column, or it may be the string key name.
 *                         The value is cast as usual for array keys (however, objects supporting conversion to string are also allowed).
 *
 * @return self Returns instance of The Arrays class.
 */
public function column(?string $columnKey = null, ?string $indexKey = null): self
```

#### Examples

```php
$arrays1 = Arrays::create([['id' => 'i1', 'val' => 'v1'], ['id' => 'i2', 'val' => 'v2']])
                    ->column('val');
$arrays2 = Arrays::create([['id' => 'i1', 'val' => 'v1'], ['id' => 'i2', 'val' => 'v2']])
                    ->column('val', 'id');
$arrays3 = Arrays::create([['id' => 'i1', 'val' => 'v1'], ['id' => 'i2', 'val' => 'v2']])
                    ->column(null, 'id');

print_r($arrays1->toArray());
print_r($arrays2->toArray());
print_r($arrays3->toArray());
```

#### The above example will output:

```text
Array
(
    [0] => v1
    [1] => v2
)

Array
(
    [i1] => v1
    [i2] => v2
)

Array
(
    [i1] => Array
        (
            [id] => i1
            [val] => v1
        )

    [i2] => Array
        (
            [id] => i2
            [val] => v2
        )

)
```
