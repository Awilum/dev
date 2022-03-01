---
title: replaceLast
template: glowyphp/component
description: Replace the last occurrence of a given value in the string.
---

```php
/**
 * Replace the last occurrence of a given value in the string.
 *
 * @param  string $search  Search
 * @param  string $replace Replace
 *
 * @return self Returns instance of The Strings class.
 */
public function replaceLast(string $search, string $replace): self
```

#### Examples

```php
$string = Strings::create('SG-1 returns from an off-world mission')->replaceLast('SG-1', 'SG-2');

echo $string;
```

#### The above example will output:

```text
SG-2 returns from an off-world mission
```
