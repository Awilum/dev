---
title: offsetExists
template: glowyphp/component
description: Whether an offset exists.
---

<h2 class="font-normal text-lg">
Whether an offset exists.
</h2>

```php
/**
 * Whether an offset exists.
 *
 * @param mixed $offset An offset to check for.
 */
public function offsetExists($offset): bool
```

#### Examples

```php
$arrays = Arrays::create(['items' => ['foo' => 'Foo', 'bar' => 'Bar']]);

if ($arrays->offsetExists('items.foo')) {
    // do something...
}

if (isset($arrays['items.bar'])) {
    // do something...
}
```
