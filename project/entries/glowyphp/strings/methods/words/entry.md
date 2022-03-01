---
title: words
template: glowyphp/component
description: Get words from the string.
---

```php
/**
 * Get words from the string.
 *
 * @param string $ignore Ingnore symbols.
 *
 * @return array Returns words array.
 */
public function words(string $ignore = '?!;:,.'): array
```

#### Examples

```php
$words = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->words();

echo $words;
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
    [6] => to
    [7] => P9Y-3C3
)
```
