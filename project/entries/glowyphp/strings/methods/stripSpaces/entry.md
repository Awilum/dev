---
title: stripSpaces
template: glowyphp/component
description: Strip all whitespaces from the given string.
---

```php
/**
 * Strip all whitespaces from the given string.
 *
 * @return self Returns instance of The Strings class.
 */
public function stripSpaces(): self
```

#### Examples

```php
$string = Strings::create('SG-1 returns from an off-world mission')->stripSpaces();

echo $string;
```

#### The above example will output:

```text
SG-1returnsfromanoff-worldmission
```
