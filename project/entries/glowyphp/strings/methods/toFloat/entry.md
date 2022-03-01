---
title: toFloat
template: glowyphp/component
description: Return Strings object as float.
---

```php
/**
 * Return Strings object as float.
 *
 * @return float Return Strings object as float.
 */
public function toFloat(): float
```

#### Examples

```php
$float = Strings::create('42.10')->toFloat();

echo $float;
```

#### The above example will output:

```text
42.10
```
