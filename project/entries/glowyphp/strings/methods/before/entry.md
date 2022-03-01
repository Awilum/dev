---
title: before
template: glowyphp/component
description: Get the portion of a string before the first occurrence of a given value.
---

```php
/**
 * Get the portion of a string before the first occurrence of a given value.
 *
 * @param string $search Search
 *
 * @return self Returns instance of The Strings class.
 */
public function before(string $search): self
```

#### Examples

```php
$string = Strings::create('SG-1 returns from an off-world mission')->before('mission');

echo $string;
```

#### The above example will output:

```text
SG-1 returns from an off-world
```
