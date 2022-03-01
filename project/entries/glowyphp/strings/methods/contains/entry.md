---
title: contains
template: glowyphp/component
description: Determine if a given string contains a given substring.
---

```php
/**
 * Determine if a given string contains a given substring.
 *
 * @param  string|string[] $needles       The string to find in haystack.
 * @param  bool            $caseSensitive Whether or not to enforce case-sensitivity. Default is true.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function contains($needles, bool $caseSensitive = true): bool
```

#### Examples

```php
// Determine if a given string contains a given substring.
$result1 = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->contains('SG-1');

// Determine if a given string contains a given array of substrings.
$result2 = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->contains(['SG-1', 'P9Y-3C3']);

echo $result1;
echo $result2;
```

#### The above example will output:

```text
1

1
```
