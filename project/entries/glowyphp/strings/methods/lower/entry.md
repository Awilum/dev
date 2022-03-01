---
title: lower
template: glowyphp/component
description: Convert the given string to lower-case.
---

```php
/**
 * Convert the given string to lower-case.
 *
 * @return self Returns instance of The Strings class.
 */
public function lower(): self
```

#### Examples

```php
$string = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->lower();

echo $string;
```

#### The above example will output:

```text
sg-1 returns from an off-world mission to p9y-3c3
```
