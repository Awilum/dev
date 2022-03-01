---
title: firstSegment
template: glowyphp/component
description: Get the first segment from a string based on a delimiter.
---

```php
/**
 * Get the first segment from a string based on a delimiter.
 *
 * @param string $delimiter Delimeter
 *
 * @return self Returns instance of The Strings class.
 */
public function firstSegment(string $delimiter = ' '): self
```

#### Examples

```php
// Get a first segment from a string based on a predefined delimiter.
$string1 = Strings::create('SG-1 returns from an off-world mission')->firstSegment();

// Get a first segment from a string based on a delimiter '-'.
$string2 = Strings::create('SG-1 returns from an off-world mission')->firstSegment('-');

echo $string1;

echo $string2;
```

#### The above example will output:

```text
SG-1

SG
```
