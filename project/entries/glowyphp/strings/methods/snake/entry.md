---
title: snake
template: glowyphp/component
description: Convert a string to snake case.
---

```php
/**
 * Convert a string to snake case.
 *
 * @param  string $delimiter Delimeter
 *
 * @return self Returns instance of The Strings class.
 */
public function snake(string $delimiter = '_'): self
```

#### Examples

```php
$string = Strings::create('fooBar')->snake();

echo $string;
```

#### The above example will output:

```text
foo_bar
```
