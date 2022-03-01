---
title: reduceSlashes
template: glowyphp/component
description: Reduces multiple slashes in a string to single slashes.
---

```php
/**
 * Reduces multiple slashes in a string to single slashes.
 *
 * @return self Returns instance of The Strings class.
 */
public function reduceSlashes(): self
```

#### Examples

```php
$string = Strings::create('some//text//here')->reduceSlashes();

echo $string;
```

#### The above example will output:

```text
some/text/here
```
