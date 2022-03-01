---
title: indexOfLast
template: glowyphp/component
description: Returns the index of the last occurrence of $needle in the string, and false if not found.
---

```php
/**
 * Returns the index of the last occurrence of $needle in the string, and false if not found.
 * Accepts an optional $offset from which to begin the search. Offsets may be negative to
 * count from the last character in the string.
 *
 * @param int|string $needle        The string to find in haystack.
 * @param int        $offset        The search offset. If it is not specified, 0 is used.
 * @param bool       $caseSensitive Whether or not to enforce case-sensitivity. Default is true.
 *
 * @return mixed Returns the index of the last occurrence of $needle in the string, and false if not found.
 */
public function indexOfLast(string $needle, int $offset = 0, bool $caseSensitive = true)
```

#### Examples

```php
$index = Strings::create('hello')->indexOfLast('l');

echo $index;
```

#### The above example will output:

```text
3
```
