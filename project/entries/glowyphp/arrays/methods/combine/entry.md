---
title: combine
template: glowyphp/component
description: Create an array using the current array as keys and the other array as values.
---

<h2 class="font-normal text-lg">
Create an array using the current array as keys and the other array as values.
</h2>

```php
/**
 * Create an array using the current array as keys and the other array as values.
 *
 * @param array $array Values array
 *
 * @return self Returns instance of The Arrays class.
 */
public function combine(array $array): self
```

#### Examples

```php
$arrays = Arrays::create(['green', 'red', 'yellow'])->combine(['avacado', 'apple', 'banana'])->toArray();

print_r($arrays);
```

#### The above example will output:

```text
Array
(
    [green] => avacado
    [red] => apple
    [yellow] => banana
)
```
