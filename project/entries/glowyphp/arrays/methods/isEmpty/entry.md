---
title: isEmpty
template: glowyphp/component
description: Check whether the array is empty or not.
---

<h2 class="font-normal text-lg">
Check whether the array is empty or not.
</h2>

```php
/**
 * Check whether the array is empty or not.
 */
public function isEmpty(): bool
```

#### Examples

```php
$arrays = Arrays::create([0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red']);

if ($arrays->isEmpty()) {
    // do something...
}

```
