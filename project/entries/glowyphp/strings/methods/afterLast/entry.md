---
title: afterLast
template: glowyphp/component
description: Return the remainder of a string after the first occurrence of a given value.
---

```php
/**
 * Return the remainder of a string after the last occurrence of a given value.
 *
 * @param string $search Search
 *
 * @return self Returns instance of The Strings class.
 */
public function afterLast(string $search): self
```

#### Examples

```php
$string = Strings::create('SG-1 returns from an off-world mission')->afterLast('SG-1');

echo $string;
```

#### The above example will output:

```text
 returns from an off-world mission
```
