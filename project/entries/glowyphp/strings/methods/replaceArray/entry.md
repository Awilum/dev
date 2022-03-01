---
title: replaceArray
template: glowyphp/component
description: Replace a given value in the string sequentially with an array.
---

```php
/**
 * Replace a given value in the string sequentially with an array.
 *
 * @param  string $search  Search
 * @param  array  $replace Replace
 *
 * @return self Returns instance of The Strings class.
 */
public function replaceArray(string $search, array $replace): self
```

#### Examples

```php
$string = Strings::create('SG-1 returns from an off-world mission')->replaceArray('SG-1', ['SG-2']);

echo $string;
```

#### The above example will output:

```text
SG-2 returns from an off-world mission
```
