---
title: segments
template: glowyphp/component
description: Get array of segments from a string based on a delimiter.
---

```php
/**
 * Get array of segments from a string based on a delimiter.
 *
 * @param string $delimiter Delimeter
 *
 * @return array Returns array of segments.
 */
public function segments(string $delimiter = ' '): array
```

#### Examples

```php
// Get array of segments from a string based on a predefined delimiter.
$segments1 = Strings::create('SG-1 returns from an off-world mission')->segments();

// Get array of segments from a string based on a delimiter '-'.
$segments2 = Strings::create('SG-1 returns from an off-world mission')->segments('-');

echo $segments1;

echo $segments2;
```

#### The above example will output:

```text
Array
(
    [0] => SG-1
    [1] => returns
    [2] => from
    [3] => an
    [4] => off-world
    [5] => mission
)

Array
(
    [0] => SG
    [1] => 1 returns from an off
    [2] => world mission
)
```
