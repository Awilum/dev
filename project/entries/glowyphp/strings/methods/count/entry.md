---
title: count
template: glowyphp/component
description: Returns the length of the string, analog to length().
---

```php
/**
 * Returns the length of the string, analog to length().
 *
 * @return int Returns string length.
 */
public function count(): int
```

#### Examples

```php
$count = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->count();

echo $count;
```

#### The above example will output:

```text
49
```
