---
title: reverse
template: glowyphp/component
description: Reverse the values order of the current array.
---

<h2 class="font-normal text-lg">
Reverse the values order of the current array.
</h2>

```php
/**
 * Reverse the values order of the current array.
 *
 * @param bool $preserveKeys Whether array keys are preserved or no. Default is false.
 */
public function reverse(bool $preserveKeys = false): self
```

#### Examples

```php
$arrays = Arrays::create(['php', 8, ['green', 'red']])
                ->reverse()
                ->toArray();

print_r($arrays);

$arrays = Arrays::create(['php', 8, ['green', 'red']])
                ->reverse(true)
                ->toArray();

print_r($arrays);
```

#### The above example will output:

```text
Array
(
    [0] => Array
        (
            [0] => green
            [1] => red
        )

    [1] => 8
    [2] => php
)
Array
(
    [2] => Array
        (
            [0] => green
            [1] => red
        )

    [1] => 8
    [0] => php
)
```
