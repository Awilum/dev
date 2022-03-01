---
title: diff
template: glowyphp/component
description: Compute the current array values which not present in the given one.
---

<h2 class="font-normal text-lg">
Compute the current array values which not present in the given one.
</h2>

```php
/**
 * Compute the current array values which not present in the given one.
 *
 * @param array $array Array for diff.
 *
 * @return self Returns instance of The Arrays class.
 */
public function diff(array $array): self
```

#### Examples

```php
$arrays = Arrays::create(['foo', 'bar'])->diff(['foo', 'bar'])->toArray();

print_r($arrays);
```

#### The above example will output:

```text
Array
(
)
```
