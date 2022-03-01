---
title: createFromString
template: glowyphp/component
description: Create a new arrayable object from the given string.
---

<h2 class="font-normal text-lg">
Create a new arrayable object from the given string.
</h2>

```php
/**
 * Create a new arrayable object from the given string.
 *
 * @param string $string    Input string.
 * @param string $separator Elements separator.
 *
 * @return self Returns instance of The Arrays class.
 */
public static function createFromString(string $string, string $separator): self
```

#### Examples

```php
$arrays = Arrays::createFromString('foo,bar', ',');
```
