---
title: flip
template: glowyphp/component
description: Exchanges all keys of current array with their associated values.
---

<h2 class="font-normal text-lg">
Exchanges all keys of current array with their associated values.
</h2>

```php
/**
 * Exchanges all keys of current array with their associated values.
 *
 * @return self Returns instance of The Arrays class.
 */
public function flip(): self
```

#### Examples

```php
$arrays = Arrays::create(['oranges', 'apples', 'pears'])->flip()->toArray();

print_r($arrays);
```

#### The above example will output:

```text
Array
(
    [oranges] => 0
    [apples] => 1
    [pears] => 2
)
```
