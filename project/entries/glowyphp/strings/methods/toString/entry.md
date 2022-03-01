---
title: toString
template: glowyphp/component
description: Return Strings object as string.
---

```php
/**
 * Return Strings object as string.
 *
 * @return string Returns strings object as string.
 */
public function toString(): string
```

#### Examples

```php
$string = Strings::create('hello world')->toString();

echo $string;
```

#### The above example will output:

```text
hello world
```
