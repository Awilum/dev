---
title: shuffle
template: glowyphp/component
description: Randomly shuffles a string.
---

```php
/**
 * Randomly shuffles a string.
 *
 * @return self Returns instance of The Strings class.
 */
public function shuffle(): self
```

#### Examples

```php
$string1 = Strings::create('hello')->shuffle();

$string2 = Strings::create('123456890')->shuffle();

echo $string1;

echo $string2;
```

#### The above example will output:

```text
lleoh

834659120
```
