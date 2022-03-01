---
title: wordsLimit
template: glowyphp/component
description: Limit the number of words in a string.
---

```php
/**
 * Limit the number of words in a string.
 *
 * @param  int    $words  Words limit
 * @param  string $append Text to append to the string IF it gets truncated
 *
 * @return self Returns instance of The Strings class.
 */
public function wordsLimit(int $words = 100, string $append = '...'): self
```

#### Examples

```php
// Get the number of words in a string with predefined limit settings
$string1 = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->wordsLimit();

// Get the number of words in a string with limit 3
$string2 = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->wordsLimit(3);

// Get the number of words in a string with limit 3 and append 'read more...'
$string3 = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->wordsLimit(3, 'read more...');

echo $string1;
echo $string2;
echo $string3;
```

#### The above example will output:

```text
SG-1 returns from an off-world mission to P9Y-3C3...

SG-1 returns from...

SG-1 returns fromread more...
```
