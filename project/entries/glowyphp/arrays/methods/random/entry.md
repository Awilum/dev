---
title: random
template: glowyphp/component
description: Returns one or a specified number of items randomly from the array.
---

<h2 class="font-normal text-lg">
Returns one or a specified number of items randomly from the array.
</h2>

```php
/**
 * Returns one or a specified number of items randomly from the array.
 *
 * @param int|null $number Number of items to return.
 */
public function random(?int $number = null)
```

#### Examples

```php
$result = Arrays::create(['foo', 'bar', 'baz'])->random();
```
