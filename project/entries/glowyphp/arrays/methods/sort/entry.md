---
title: sort
template: glowyphp/component
description: Sorts a associative array by a certain sub key.
---

<h2 class="font-normal text-lg">
Sorts a associative array by a certain sub key.
</h2>

```php
/**
 * Sorts a associative array by a certain sub key.
 *
 * @param  string $direction    Order type DESC (descending) or ASC (ascending)
 * @param  int    $sortFlags    A PHP sort method flags.
 *                              https://www.php.net/manual/ru/function.sort.php
 * @param bool    $preserveKeys Maintain index association
 */
public function sort(string $direction = 'ASC', int $sortFlags = SORT_REGULAR, bool $preserveKeys = false): self
```

#### Examples

```php
$arrays = Arrays::create([0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red'])->sort()->toArray()

print_r($arrays);
```

#### The above example will output:

```text
Array
(
    [0] => blue
    [1] => green
    [2] => red
    [3] => red
)
```
