---
title: isSimilar
template: glowyphp/component
description: Check if two strings are similar.
---

```php
/**
 * Check if two strings are similar.
 *
 * @param string $string                  The string to compare against.
 * @param float  $minPercentForSimilarity The percentage of needed similarity. Default is 80%
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isSimilar(string $string, float $minPercentForSimilarity = 80.0): bool
```

#### Examples

```php
if (Strings::create('fòôbàřs')->isSimilar('fòôbàřs')) {
    // do something...
}

if (Strings::create('fòôbàřs')->isSimilar('fòô', 50.0)) {
    // do something...
}
```
