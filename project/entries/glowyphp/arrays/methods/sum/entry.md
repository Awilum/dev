---
title: sum
template: glowyphp/component
description: Calculate the sum of values in the current array.
---

<h2 class="font-normal text-lg">
Sorts array by keys.
</h2>

```php
/**
 * Calculate the sum of values in the current array.
 *
 * @return float|int Returns the sum as an integer or float.
 */
public function sum()
```

#### Examples

```php
$result = Arrays::create([2, 2, 2])->sum();

print_r($result);
```

#### The above example will output:

```text
6
```
