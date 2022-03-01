---
title: toBoolean
template: glowyphp/component
description: Returns a boolean representation of the given logical string value.
---

```php
/**
 * Returns a boolean representation of the given logical string value.
 *
 * For example:
 * 'true', '1', 'on' and 'yes' will return true.
 * 'false', '0', 'off', and 'no' will return false.
 *
 * In all instances, case is ignored.
 *
 * For other numeric strings, their sign will determine the return value.
 * In addition, blank strings consisting of only whitespace will return
 * false. For all other strings, the return value is a result of a
 * boolean cast.
 *
 * @return bool Returns a boolean representation of the given logical string value.
 */
public function toBoolean(): bool
```

#### Examples

```php
$true = Strings::create('on')->toBoolean();
$false = Strings::create('off')->toBoolean();

var_dump($true);

var_dump($false);
```

#### The above example will output:

```text
bool(true)

bool(false)
```
