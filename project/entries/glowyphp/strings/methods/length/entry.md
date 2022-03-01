---
title: length
template: glowyphp/component
description: Return the length of the given string.
---

```php
/**
 * Return the length of the given string.
 *
 * @return int Returns the length of the given string.
 */
public function length(): int
```

#### Examples

```php
$length = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->length();

echo $length;
```

#### The above example will output:

```text
49
```
