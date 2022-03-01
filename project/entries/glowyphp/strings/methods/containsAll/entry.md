---
title: containsAll
template: glowyphp/component
description: Determine if a given string contains all array values.
---

```php
/**
 * Determine if a given string contains all array values.
 *
 * @param  string[] $needles       The array of strings to find in haystack.
 * @param  bool     $caseSensitive Whether or not to enforce case-sensitivity. Default is true.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function containsAll(array $needles, bool $caseSensitive = true): bool
```

#### Examples

```php
$result = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->containsAll(['SG-1', 'P9Y-3C3']);

echo $result;
```

#### The above example will output:

```text
1
```
