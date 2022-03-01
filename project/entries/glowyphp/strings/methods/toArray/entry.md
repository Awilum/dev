---
title: toArray
template: glowyphp/component
description: Return Strings object as array based on a delimiter.
---

```php
/**
 * Return Strings object as array based on a delimiter.
 *
 * @param string $delimiter Delimeter. Default is null.
 *
 * @return array Return Strings object as array based on a delimiter.
 */
public function toArray(?string $delimiter = null): array
```

#### Examples

```php
$array1 = Strings::create('hello world')->toArray();
$array2 = Strings::create('hello, world')->toArray(',');

print_r($array1);

print_r($array2);
```

#### The above example will output:

```text
Array
(
    [0] => hello world
)

Array
(
    [0] => hello
    [1] => world
)
```
