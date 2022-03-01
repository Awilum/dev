---
title: intersectAssoc
template: glowyphp/component
description: Compute the current array values with additional index check.
---

<h2 class="font-normal text-lg">
Compute the current array values with additional index check.
</h2>

```php
/**
 * Compute the current array values with additional index check.
 *
 * @param array $array Array for intersect.
 */
public function intersectAssoc(array $array): self
```

#### Examples

```php
$arrays = Arrays::create(["a" => "green", "b" => "brown", "c" => "blue", "red"])
                ->intersectAssoc(["a" => "green", "b" => "yellow", "blue", "red"])
                ->toArray();

print_r($arrays);
```

#### The above example will output:

```text
Array
(
    [a] => green
)
```
