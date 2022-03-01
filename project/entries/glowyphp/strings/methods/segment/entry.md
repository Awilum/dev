---
title: segment
template: glowyphp/component
description: Get a segment from a string based on a delimiter.
---

```php
/**
 * Get a segment from a string based on a delimiter.
 * Returns an empty string when the offset doesn't exist.
 * Use a negative index to start counting from the last element.
 *
 * @param int    $index     Index
 * @param string $delimiter Delimeter
 *
 * @return self Returns instance of The Strings class.
 */
public function segment(int $index, string $delimiter = ' '): self
```

#### Examples

```php
// Get a segment 1 from a string based on a predefined delimiter.
$string1 = Strings::create('SG-1 returns from an off-world mission')->segment(1);

// Get a segment 1 from a string based on a delimiter '-'.
$string2 = Strings::create('SG-1 returns from an off-world mission')->segment(1, '-');

// Get a segment 1 from a string starting from the last based on a delimiter '-'.
$string3 = Strings::create('SG-1 returns from an off-world mission')->segment(-1, '-');

echo $string1;

echo $string2;

echo $string3;
```

#### The above example will output:

```text
returns

1 returns from an off

world mission
```
