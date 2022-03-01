---
title: copy
template: glowyphp/component
description: Creates a new Arrays object with the same items.
---

<h2 class="font-normal text-lg">
Creates a new Arrays object with the same items.
</h2>

```php
/**
 * Creates a new Arrays object with the same items.
 *
 * @return self Returns instance of The Arrays class.
 */
public function copy(): self
```

#### Examples

```php
$foo = Arrays::create(['foo', 'bar']);
$bar = $foo->copy();
```
