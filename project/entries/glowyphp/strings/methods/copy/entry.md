---
title: copy
template: glowyphp/component
description: Creates a new Strings object with the same string.
---

```php
/**
 * Creates a new Strings object with the same string.
 *
 * @return self Returns instance of The Strings class.
 */
public function copy(): self
```

#### Examples

```php
$strings1 = Strings::create('SG-1 returns from an off-world mission to P9Y-3C3');

$strings2 = $strings1->copy();

echo $strings2;
```

#### The above example will output:

```text
SG-1 returns from an off-world mission to P9Y-3C3
```
