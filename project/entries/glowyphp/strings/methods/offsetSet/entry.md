---
title: offsetUnset
template: glowyphp/component
description: Implements part of the ArrayAccess interface, but throws an exception when called.
---

```php
/**
 * Implements part of the ArrayAccess interface, but throws an exception
 * when called. This maintains the immutability of Strings objects.
 *
 * @param  mixed $offset The index of the character
 *
 * @throws Exception When called
 */
public function offsetUnset($offset): void
```

#### Examples

```php
$strings = Strings::create('fòô');
$strings->offsetUnset(3);

// Will throws an exception!
```
