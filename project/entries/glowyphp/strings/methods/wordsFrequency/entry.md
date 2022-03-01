---
title: wordsFrequency
template: glowyphp/component
description: Get words usage frequency array.
---

```php
/**
 * Get words usage frequency array.
 *
 * @param int    $decimals     Number of decimal points. Default is 2.
 * @param string $decPoint     Separator for the decimal point. Default is ".".
 * @param string $thousandsSep Thousands separator. Default is ",".
 *
 * @return array Returns an words usage frequency array.
 */
public function wordsFrequency(int $decimals = 2, string $decPoint = '.', string $thousandsSep = ','): array
```

#### Examples

```php
// Get words usage frequency array.
$result1 = Strings::create('car fòô bàřs apple')->wordsFrequency();

// Get words usage frequency array and set number of decimal points.
$result2 = Strings::create('car fòô bàřs apple')->wordsFrequency(4);

// Get words usage frequency array, set number of decimal points, set separator for the decimal point.
$result3 = Strings::create('car fòô bàřs apple')->wordsFrequency(4, '.');

// Get words usage frequency array, set number of decimal points, set separator for the decimal point, thousands separator.
$result4 = Strings::create('car fòô bàřs apple')->wordsFrequency(4, '.', ',');

print_r($result1);

print_r($result2);

print_r($result3);

print_r($result4);
```

#### The above example will output:

```text
Array
(
    [car] => 25.00
    [fòô] => 25.00
    [bàřs] => 25.00
    [apple] => 25.00
)

Array
(
    [car] => 25.0000
    [fòô] => 25.0000
    [bàřs] => 25.0000
    [apple] => 25.0000
)

Array
(
    [car] => 25.0000
    [fòô] => 25.0000
    [bàřs] => 25.0000
    [apple] => 25.0000
)

Array
(
    [car] => 25.0000
    [fòô] => 25.0000
    [bàřs] => 25.0000
    [apple] => 25.0000
)
```
