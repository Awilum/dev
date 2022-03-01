---
title: whereRegexp
template: glowyphp/component
description: Filters the array items by the given key is matches to given regexp.
---

<h2 class="font-normal text-lg">
Filters the array items by the given key is matches to given regexp.
</h2>

```php
/**
 * Filters the array items by the given key is matches to given regexp.
 *
 * @param string $key   Key of the array for comparison.
 * @param mixed  $value Value used for comparison.
 *
 * @return self Returns instance of The Arrays class.
 */
public function whereRegexp(string $key, $value): self
```

#### Examples

```php
$result = Arrays::create([
                0 => ['message' => '42'],
                1 => ['message' => '21'],
                2 => ['message' => 'Hello'],
                3 => ['message' => 'Hello 42'],
            ])
            ->whereRegexp('message', '^\d+$')
            ->toArray();
);
```
