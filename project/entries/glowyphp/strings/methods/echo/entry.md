---
title: echo
template: glowyphp/component
description: Echo the string.
---

```php
/**
 * Echo the string.
 *
 * @return self Returns instance of The Strings class.
 */
public function echo(): self
```

#### Examples

```php
$string = Strings::create('Hello');

$string->append(' World')->echo()->hash()->echo();
```

#### The above example will output:

```text
Hello Worldb10a8db164e0754105b7a99be72e3fe5
```
