---
title: getValues
template: glowyphp/component
description: Return an array of all values stored array.
---

<h2 class="font-normal text-lg">
Return an array of all values stored array.
</h2>

```php
/**
 * Return an array of all values stored array.
 *
 * @return array Returns an indexed array of values.
 */
public function getValues(): array
```

#### Examples

```php
$result = Arrays::create([1, 2, 3, 4, 5])->getValues();

print_r($result);
```

#### The above example will output:

```text
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
)
```
