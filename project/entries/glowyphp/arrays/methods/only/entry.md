---
title: only
template: glowyphp/component
description: Return slice of an array with just a given keys.
---

<h2 class="font-normal text-lg">
Return slice of an array with just a given keys.
</h2>

```php
/**
 * Return slice of an array with just a given keys.
 *
 * @param array $keys List of keys to return.
 */
public function only(array $keys): self
```

#### Examples

```php
$arrays = Arrays::create(['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5])->only(['b', 'e'])->toArray();

print_r($arrays);
```

#### The above example will output:

```text
Array
(
    [b] => 2
    [e] => 5
)
```
