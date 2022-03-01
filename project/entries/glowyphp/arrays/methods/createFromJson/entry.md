---
title: createFromJson
template: glowyphp/component
description: Create a new arrayable object from the given JSON string.
---

<h2 class="font-normal text-lg">
Create a new arrayable object from the given JSON string.
</h2>

```php
/**
 * Create a new arrayable object from the given JSON string.
 *
 * @param string $input A string containing JSON.
 * @param bool   $assoc Decode assoc. When TRUE, returned objects will be converted into associative arrays.
 * @param int    $depth Decode Depth. Set the maximum depth. Must be greater than zero.
 * @param int    $flags Bitmask consisting of decode options
 *
 * @return self Returns instance of The Arrays class.
 */
public static function createFromJson(string $input, bool $assoc = true, int $depth = 512, int $flags = 0): self
```

#### Examples

```php
$arrays = Arrays::createFromJson('{"foo": "bar"}');
```
