---
title: isNumeric
template: glowyphp/component
description: Returns true if the string is a number or a numeric strings, false otherwise.
---

```php
/**
 * Returns true if the string is a number or a numeric strings, false otherwise.
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function isNumeric(): bool
```

#### Examples

```php
if (Strings::create('42')->isNumeric()) {
    // do something...
}
```
