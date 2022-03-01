---
title: limit
template: glowyphp/component
description: Limit the number of characters in a string.
---

```php
/**
 * Limit the number of characters in a string.
 *
 * @param  int    $limit  Limit of characters
 * @param  string $append Text to append to the string IF it gets truncated
 *
 * @return self Returns instance of The Strings class.
 */
public function limit(int $limit = 100, string $append = '...'): self
```

#### Examples

```php
// Get string with predefined limit settings
$string1 = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->limit();

// Get string with limit 10
$string2 = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->limit(10);

// Get string with limit 10 and append 'read more...'
$string3 = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->limit(10, 'read more...');

echo $string1;

echo $string2;

echo $string3;
```

#### The above example will output:

```text
SG-1 returns from an off-world mission to P9Y-3C3

SG-1 retur...

SG-1 returread more...
```
