---
title: count
template: glowyphp/component
description: Returns the number of occurrences of $substring in the given string.
---

```php
/**
 * Returns the number of occurrences of $substring in the given string.
 * By default, the comparison is case-sensitive, but can be made insensitive
 * by setting $caseSensitive to false.
 *
 * @param  string $substring     The substring to search.
 * @param  bool   $caseSensitive Whether or not to enforce case-sensitivity. Default is true.
 *
 * @return int Returns the number of occurrences of $substring in the given string.
 */
public function countSubString(string $substring, bool $caseSensitive = true): int
```

#### Examples

```php
// Returns the number of occurrences of $substring in the given string.
$result1 = Strings::create('Test string here for test')->countSubString('test');

// Returns the number of occurrences of $substring in the given string with $caseSensitive false.
$result2 = Strings::create('Test string here for test')->countSubString('test', false);

echo $result1;

echo $result2;
```

#### The above example will output:

```text
1

2
```
