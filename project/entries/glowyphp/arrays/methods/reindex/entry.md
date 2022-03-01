---
title: reindex
template: glowyphp/component
description: Create a numerically re-indexed array based on the current array.
---

<h2 class="font-normal text-lg">
Create a numerically re-indexed array based on the current array.
</h2>

```php
/**
 * Create a numerically re-indexed array based on the current array.
 */
public function reindex(): self
```

#### Examples

```php
$arrays = Arrays::create([10 => 'foo', 111 => 'bar'])->reindex()->toArray();

print_r($arrays);
```

#### The above example will output:

```text
Array
(
    [0] => foo
    [1] => bar
)
```
