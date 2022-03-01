---
title: indexOf
template: glowyphp/component
description: Returns the index of the first occurrence of $needle in the string, and false if not found. Accepts an optional offset from which to begin the search.
---

```php
/**
 * Returns the index of the first occurrence of $needle in the string,
 * and false if not found. Accepts an optional offset from which to begin
 * the search.
 *
 * @param int|string $needle        The string to find in haystack.
 * @param int        $offset        The search offset. If it is not specified, 0 is used.
 * @param bool       $caseSensitive Whether or not to enforce case-sensitivity. Default is true.
 *
 * @return mixed Returns the index of the first occurrence of $needle in the string,
 * and false if not found.
 */
public function indexOf($needle, int $offset = 0, bool $caseSensitive = true)
```

#### Examples

```php
$index = Strings::create('hello')->indexOf('e');

echo $index;
```

#### The above example will output:

```text
1
```
