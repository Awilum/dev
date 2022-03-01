---
title: camel
template: glowyphp/component
description: Convert a string to camel case.
---

```php
/**
 * Convert a string to camel case.
 *
 * @return self Returns instance of The Strings class.
 */
public function camel(): self
```

#### Examples

```php
$string = Strings::create('foo_bar')->camel();

echo $string;
```

#### The above example will output:

```text
fooBar
```
