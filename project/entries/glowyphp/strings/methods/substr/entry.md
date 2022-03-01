---
title: substr
template: glowyphp/component
description: Return the length of the given string.
---

```php
/**
 * Returns the portion of string specified by the start and length parameters.
 *
 * @param  int      $start  If start is non-negative, the returned string will
 *                          start at the start'th position in $string, counting from zero.
 *                          For instance, in the string 'abcdef', the character at position
 *                          0 is 'a', the character at position 2 is 'c', and so forth.
 * @param  int|null $length Maximum number of characters to use from string.
 *                          If omitted or NULL is passed, extract all characters to the end of the string.
 *
 * @return self Returns instance of The Strings class.
 */
public function substr(int $start, ?int $length = null): self
```

#### Examples

```php
// Returns the portion of string specified by the start 0.
$string1 = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->substr(0);

// Returns the portion of string specified by the start 0 and length 4.
$string2 = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->substr(0, 4);

echo $string1;

echo $string2;
```

#### The above example will output:

```text
SG-1 returns from an off-world mission to P9Y-3C3

SG-1
```
