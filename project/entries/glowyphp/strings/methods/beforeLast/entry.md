---
title: beforeLast
template: glowyphp/component
description: Get the portion of a string before the last occurrence of a given value.
---

```php
/**
 * Get the portion of a string before the last occurrence of a given value.
 *
 * @param string $search Search
 *
 * @return self Returns instance of The Strings class.
 */
public function beforeLast(string $search): self
```

#### Examples

```php
$string = Strings::create('SG-1 returns from an off-world mission')->beforeLast('mission');

echo $string;
```

#### The above example will output:

```text
SG-1 returns from an off-world
```
