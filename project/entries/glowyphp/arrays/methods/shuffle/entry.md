---
title: shuffle
template: glowyphp/component
description: Shuffle the given array and return the result.
---

<h2 class="font-normal text-lg">
Shuffle the given array and return the result.
</h2>

```php
/**
 * Shuffle the given array and return the result.
 *
 * @param  int|null $seed An arbitrary integer seed value.
 */
public function shuffle($seed = null): self
```

#### Examples

```php
$arrays = Arrays::create([1, 2, 3, 4, 5])->shuffle();

print_r($arrays->toArray());
```

#### The above example will output:

```text
Array
(
    [0] => 4
    [1] => 3
    [2] => 5
    [3] => 1
    [4] => 2
)
```
