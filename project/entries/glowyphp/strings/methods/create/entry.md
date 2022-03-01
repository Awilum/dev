---
title: create
template: glowyphp/component
description: Create a new stringable object from the given string.
---

```php
/**
 * Create a new stringable object from the given string.
 *
 * Initializes a Strings object and assigns both $string and $encoding properties
 * the supplied values. $string is cast to a string prior to assignment. Throws
 * an InvalidArgumentException if the first argument is an array or object
 * without a __toString method.
 *
 * @param mixed  $string   Value to modify, after being cast to string. Default: ''
 * @param string $encoding The character encoding. Default: UTF-8
 *
 * @return self Returns instance of The Strings class.
 */
public static function create($string = '', string $encoding = 'UTF-8'): self
```
#### Examples

```php
$string = Strings::create('SG-1 returns from an off-world mission');

echo $string;
```

#### The above example will output:

```
SG-1 returns from an off-world mission
```
