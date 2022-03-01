---
title: normalizeSpaces
template: glowyphp/component
description: Normalize white-spaces to a single space.
---

```php
/**
 * Normalize white-spaces to a single space.
 *
 * @return self Returns instance of The Strings class.
 */
public function normalizeSpaces(): self
```

#### Examples

```php
$string = Strings::create('SG-1  returns  from  an  off-world  mission')->normalizeSpaces();

echo $string;
```

#### The above example will output:

```text
SG-1 returns from an off-world mission
```
