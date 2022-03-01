---
title: offsetGet
template: glowyphp/component
description: Returns the character at the given index.
---

```php
/**
 * Returns the character at the given index. Offsets may be negative to
 * count from the last character in the string. Implements part of the
 * ArrayAccess interface, and throws an OutOfBoundsException if the index
 * does not exist.
 *
 * @param  mixed $offset The index from which to retrieve the char
 *
 * @return mixed                 The character at the specified index
 * @return bool Return TRUE key exists in the array, FALSE otherwise.
 *
 * @throws OutOfBoundsException  If the positive or negative offset does
 *                               not exist
 */
public function offsetGet($offset)
```

#### Examples

```php
$strings = Strings::create('fòô');

echo $strings[0];
echo $strings[1];
echo $strings[2];
echo $strings->offsetGet(0);
echo $strings->offsetGet(1);
echo $strings->offsetGet(2);
```

#### The above example will output:

```text
f
ò
ô
f
ò
ô
```
