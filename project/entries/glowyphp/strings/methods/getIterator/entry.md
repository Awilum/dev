---
title: getIterator
template: glowyphp/component
description: Returns a new ArrayIterator, thus implementing the IteratorAggregate interface.
---

```php
/**
 * Returns a new ArrayIterator, thus implementing the IteratorAggregate
 * interface. The ArrayIterator's constructor is passed an array of chars
 * in the multibyte string. This enables the use of foreach with instances
 * of Strings\Strings.
 *
 * @return ArrayIterator An iterator for the characters in the string
 */
public function getIterator(): ArrayIterator
```

#### Examples

```php
$iterator = Strings::create('foo')->getIterator();

print_r($iterator);
```

#### The above example will output:

```text
ArrayIterator Object
(
    [storage:ArrayIterator:private] => Array
        (
            [0] => f
            [1] => o
            [2] => o
        )
)
```
