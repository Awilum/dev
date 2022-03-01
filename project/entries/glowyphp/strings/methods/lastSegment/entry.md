---
title: lastSegment
template: glowyphp/component
description: Get the last segment from a string based on a delimiter.
---

```php
/**
 * Get the last segment from a string based on a delimiter.
 *
 * @param string $string    String
 * @param string $delimiter Delimeter
 *
 * @return self Returns instance of The Strings class.
 */
public function lastSegment(string $delimiter = ' '): self
```

#### Examples

```php
// Get a last segment from a string based on a predefined delimiter.
$string1 = Strings::create('SG-1 returns from an off-world mission')->lastSegment();

// Get a last segment from a string based on a delimiter '-'.
$string2 = Strings::create('SG-1 returns from an off-world mission')->lastSegment('-');

echo $string1;

echo $string2;
```

#### The above example will output:

```text
mission

world mission
```
