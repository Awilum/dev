---
title: increment
template: glowyphp/component
description: Add's _1 to a string or increment the ending number to allow _2, _3, etc.
---

```php
/**
 * Add's _1 to a string or increment the ending number to allow _2, _3, etc.
 *
 * @param  int    $first     Start with
 * @param  string $separator Separator
 *
 * @return self Returns instance of The Strings class.
 */
public function increment(int $first = 1, string $separator = '_'): self
```

#### Examples

```php
// Increment string with predefined settings
$string1 = Strings::create('page_1')->increment();

// Increment string with custom settings
$string2 = Strings::create('page-1')->increment(1, '-');

echo $string1;
echo $string2;
```

#### The above example will output:

```text
page_2

page-2
```
