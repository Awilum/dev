---
title: whereOlder
template: glowyphp/component
description: Filters the array items by the given key is older given value.
---

<h2 class="font-normal text-lg">
Filters the array items by the given key is older given value.
</h2>

```php
/**
 * Filters the array items by the given key is older given value.
 *
 * @param string $key   Key of the array for comparison.
 * @param mixed  $value Value used for comparison.
 *
 * @return self Returns instance of The Arrays class.
 */
public function whereOlder(string $key, $value): self
```

#### Examples

```php
$result = Arrays::create([
                0 => ['date' => '2020-11-11'],
                1 => ['date' => '2020-11-12'],
            ])
            ->whereOlder('date', '2020-11-12')
            ->toArray();
);
```
