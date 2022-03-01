---
title: offsetUnset
template: glowyphp/component
description: Unset an offset.
---

<h2 class="font-normal text-lg">
Unset an offset.
</h2>

```php
/**
 * Unset an offset.
 *
 * @param mixed $offset The offset to unset.
 */
public function offsetUnset($offset): void
```

#### Examples

```php
$arrays = Arrays::create(['items' => ['foo' => 'Foo', 'bar' => 'Bar']]);

$arrays->offsetUnset('items.foo');
unset($arrays['items.bar']);
```
