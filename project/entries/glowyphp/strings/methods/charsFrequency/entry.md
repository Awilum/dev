---
title: charsFrequency
template: glowyphp/component
description: Get chars usage frequency array.
---

```php
/**
 * Get chars usage frequency array.
 *
 * @param int    $decimals     Number of decimal points. Default is 2.
 * @param string $decPoint     Separator for the decimal point. Default is ".".
 * @param string $thousandsSep Thousands separator. Default is ",".
 *
 * @return array Returns an chars usage frequency array.
 */
public function charsFrequency(int $decimals = 2, string $decPoint = '.', string $thousandsSep = ','): array
```

#### Examples

```php
$string = Strings::create('car_fòô_bàřs_apple')->charsFrequency();

print_r($string);
```

#### The above example will output:

```text
Array
(
    [_] => 16.67
    [a] => 11.11
    [p] => 11.11
    [c] => 5.56
    [r] => 5.56
    [f] => 5.56
    [ò] => 5.56
    [ô] => 5.56
    [b] => 5.56
    [à] => 5.56
    [ř] => 5.56
    [s] => 5.56
    [l] => 5.56
    [e] => 5.56
)
```
