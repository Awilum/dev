---
title: padBoth
template: glowyphp/component
description: Pad both sides of a string with another.
---

```php
/**
 * Pad both sides of a string with another.
 *
 * @param  int    $length If the value of pad_length is negative, less than, or equal to the length of the input string, no padding takes place, and input will be returned.
 * @param  string $pad    The pad string may be truncated if the required number of padding characters can't be evenly divided by the pad_string's length.
 *
 * @return self Returns instance of The Strings class.
 */
public function padBoth(int $length, string $pad = ' '): self
```

#### Examples

```php
$string = Strings::create('SG-1 returns from an off-world mission')->padBoth(50, '-');

echo $string;
```

#### The above example will output:

```text
------SG-1 returns from an off-world mission------
```
