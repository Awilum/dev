---
title: ucfirst
template: glowyphp/component
description: Converts the first character of a string to upper case and leaves the other characters unchanged.
---

```php
/**
 * Converts the first character of a string to upper case
 * and leaves the other characters unchanged.
 *
 * @return self Returns instance of The Strings class.
 */
public function ucfirst(): self
```

#### Examples

```php
$result = Strings::create('daniel')->ucfirst();

echo $result;
```

#### The above example will output:

```text
Daniel
```
