---
title: extract
template: glowyphp/component
description: Extract the items from the current array using "dot" notation for further manipulations.
---

<h2 class="font-normal text-lg">
Extract the items from the current array using "dot" notation for further manipulations.
</h2>

```php
/**
 * Extract the items from the current array using "dot" notation for further manipulations.
 *
 * @param  string|int|null $key     Key.
 * @param  mixed           $default Default value.
 *
 * @return self Returns instance of The Arrays class.
 */
public function extract($key, $default = null): self
```

#### Examples

```php
$result = Arrays::create(['items' => ['catalog' => ['nums' => [10, 20, 30]]]])
                    ->extract('items.catalog.nums')
                    ->sum()

print_r($result);

$result = Arrays::create(['items' => ['catalog' => ['nums' => [10, 20, 30]]]])
                    ->extract('items')
                    ->extract('catalog')
                    ->extract('nums')
                    ->sum()

print_r($result);
```

#### The above example will output:

```text
60
60
```
