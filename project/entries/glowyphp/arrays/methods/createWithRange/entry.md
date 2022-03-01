---
title: createWithRange
template: glowyphp/component
description: Create a new arrayable object from the given string.
---

<h2 class="font-normal text-lg">
Create a new arrayable object from the given string.
</h2>


```php
/**
 * Create a new arrayable object with a range of elements.
 *
 * @param mixed $low  First value of the sequence.
 * @param mixed $high The sequence is ended upon reaching the end value.
 * @param int   $step If a step value is given, it will be used as the increment between elements in the sequence.
 *                    step should be given as a positive number. If not specified, step will default to 1.
 *
 * @return self Returns instance of The Arrays class.
 */
public static function createWithRange($low, $high, int $step = 1): self
```

#### Examples

```php
$arrays = Arrays::createWithRange(1, 5);
```
