---
title: sortKeys
template: glowyphp/component
description: Sorts array by keys.
---

<h2 class="font-normal text-lg">
Sorts array by keys.
</h2>

```php
/**
 * Sorts array by keys.
 *
 * @param  string $direction    Order type DESC (descending) or ASC (ascending)
 * @param  int    $sortFlags    A PHP sort method flags.
 *                              https://www.php.net/manual/ru/function.sort.php
 */
public function sortKeys(string $direction = 'ASC', int $sortFlags = SORT_REGULAR): self
```

#### Examples

```php
$arrays = Arrays::create(['a' => 'blue', 'b' => 'red', 'c' => 'green'])->sortKeys()->toArray()

print_r($arrays);
```

#### The above example will output:

```text
Array
(
    [a] => blue
    [b] => red
    [c] => green
)
```
