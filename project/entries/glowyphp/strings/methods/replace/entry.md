---
title: replace
template: glowyphp/component
description: Replace the given value in the given string.
---

```php
/**
 * Replace the given value in the given string.
 *
 * @param  string $search  Search
 * @param  mixed  $replace Replace
 *
 * @return self Returns instance of The Strings class.
 */
public function replace(string $search, $replace): self
```

#### Examples

```php
$string = Strings::create('SG-1 returns from an off-world mission')->replace('SG-1', 'SG-2');

echo $string;
```

#### The above example will output:

```text
SG-2 returns from an off-world mission
```
