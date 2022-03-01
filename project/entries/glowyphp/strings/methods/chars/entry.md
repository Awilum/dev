---
title: chars
template: glowyphp/component
description: Returns an array consisting of the characters in the string.
---

```php
/**
 * Returns an array consisting of the characters in the string.
 *
 * @return array Returns an array of string chars.
 */
public function chars(): array
```

#### Examples

```php
$string = Strings::create('car_fòô_bàřs_apple')->chars();

print_r($string);
```

#### The above example will output:

```text
Array
(
    [0] => c
    [1] => a
    [2] => r
    [3] => _
    [4] => f
    [5] => ò
    [6] => ô
    [7] => _
    [8] => b
    [9] => à
    [10] => ř
    [11] => s
    [12] => _
    [13] => a
    [14] => p
    [15] => p
    [16] => l
    [17] => e
)
```
