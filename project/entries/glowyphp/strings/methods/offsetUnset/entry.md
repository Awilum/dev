---
title: offsetSet
template: glowyphp/component
description: Implements part of the ArrayAccess interface, but throws an exception when called.
---

```php
/**
 * Implements part of the ArrayAccess interface, but throws an exception
 * when called. This maintains the immutability of Strings objects.
 *
 * @param  mixed $offset The index of the character
 * @param  mixed $value  Value to set
 *
 * @throws Exception When called
 */
public function offsetSet($offset, $value): void
```

#### Examples

```php
$strings = Strings::create('fòô');
$strings->offsetSet(3, 'foo');

// Will throws an exception!
```
