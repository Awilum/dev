---
title: toInteger
template: glowyphp/component
description: Return Strings object as integer.
---

```php
/**
 * Return Strings object as integer.
 *
 * @return int Return Strings object as integer.
 */
public function toInteger(): int
```

#### Examples

```php
$integer = Strings::create('42')->toInteger();

echo $integer;
```

#### The above example will output:

```text
42
```
