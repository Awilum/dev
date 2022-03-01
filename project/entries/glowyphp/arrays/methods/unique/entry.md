---
title: unique
template: glowyphp/component
description: Remove duplicate values from the current array.
---

<h2 class="font-normal text-lg">
Remove duplicate values from the current array.
</h2>

```php
/**
 * Remove duplicate values from the current array.
 *
 * @param int $sortFlags Sort flags used to modify the sorting behavior.
 *                       Sorting type flags:
 *                       https://www.php.net/manual/en/function.array-unique
 *
 * @return self Returns instance of The Arrays class.
 */
public function unique(int $sortFlags = SORT_STRING): self
```

#### Examples

```php
$arrays = Arrays::create(["a" => "green", "red", "b" => "green", "blue", "red"])->unique()->toArray();

print_r($arrays);
```

#### The above example will output:

```text
Array
(
    [a] => green
    [0] => red
    [1] => blue
)
```
