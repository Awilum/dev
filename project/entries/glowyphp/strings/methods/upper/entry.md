---
title: upper
template: glowyphp/component
description: Convert the given string to upper-case.
---

```php
/**
 * Convert the given string to upper-case.
 *
 * @return self Returns instance of The Strings class.
 */
public function upper(): self
```

#### Examples

```php
$string = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3')->upper();

echo $string;
```

#### The above example will output:

```text
SG-1 RETURNS FROM AN OFF-WORLD MISSION TO P9Y-3C3
```
