---
title: offsetExists
template: glowyphp/component
description: Returns whether or not a character exists at an index.
---

```php
/**
 * Returns whether or not a character exists at an index. Offsets may be
 * negative to count from the last character in the string. Implements
 * part of the ArrayAccess interface.
 *
 * @param  mixed $offset The index to check
 *
 * @return bool Return TRUE key exists in the array, FALSE otherwise.
 */
public function offsetExists($offset): bool
```

#### Examples

```php
$strings = Strings::create('fòô');

if (isset($strings[2]) && $strings[2] == 'ô') {
    // do something...
}

if ($strings->offsetExists(2) && $strings->offsetGet(2) == 'ô') {
    // do something...
}
```
