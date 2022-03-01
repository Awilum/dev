---
title: product
template: glowyphp/component
description: Calculate the product of values in the current array.
---

<h2 class="font-normal text-lg">
Calculate the product of values in the current array.
</h2>

```php
/**
 * Calculate the product of values in the current array.
 *
 * @return float|int Returns the product as an integer or float.
 */
public function product()
```

#### Examples

```php
$result = Arrays::create([2, 2, 2])->product();

print_r($result);
```

#### The above example will output:

```text
8
```
