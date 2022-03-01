---
title: format
template: glowyphp/component
description: Return the formatted string.
---

```php
/**
 * Return the formatted string.
 *
 * @param mixed ...$args Any number of elements to fill the string.
 *
 * @return self Returns instance of The Strings class.
 */
public function format(...$args): self
```

#### Examples

```php
$strings = new Strings('There are %d monkeys in the %s');

$num = 5;
$location = 'tree';

$strings->format($num, $location);

echo $strings;
```

#### The above example will output:

```text
There are 5 monkeys in the tree
```
