---
title: trimSlashes
template: glowyphp/component
description: Removes any leading and trailing slashes from a string.
---

```php
/**
 * Removes any leading and trailing slashes from a string.
 *
 * @return self Returns instance of The Strings class.
 */
public function trimSlashes(): self
```

#### Examples

```php
$string = Strings::create('some string here/')->trimSlashes();

echo $string;
```

#### The above example will output:

```text
some string here
```
