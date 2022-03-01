---
title: whereContains
template: glowyphp/component
description: Filters the array items by the given key is contains given value.
---

<h2 class="font-normal text-lg">
Filters the array items by the given key is contains given value.
</h2>

```php
/**
 * Filters the array items by the given key is contains given value.
 *
 * @param string $key   Key of the array for comparison.
 * @param mixed  $value Value used for comparison.
 *
 * @return self Returns instance of The Arrays class.
 */
public function whereContains(string $key, $value): self
```

#### Examples

```php
$result = Arrays::create([
                0 => ['title' => 'FòôBar'],
                1 => ['title' => 'BarFòô'],
            ])->whereContains('title', 'Fòô')
              ->toArray();
);
```
