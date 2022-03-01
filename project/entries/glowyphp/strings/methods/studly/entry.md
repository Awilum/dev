---
title: studly
template: glowyphp/component
description: Convert a string to studly caps case.
---

```php
/**
 * Convert a string to studly caps case.
 *
 * @return self Returns instance of The Strings class.
 */
public function studly(): self
```

#### Examples

```php
$string = Strings::create('foo_bar')->studly();

echo $string;
```

#### The above example will output:

```text
FooBar
```
