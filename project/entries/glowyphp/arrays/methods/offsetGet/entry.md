---
title: offsetGet
template: glowyphp/component
description: Offset to retrieve.
---

<h2 class="font-normal text-lg">
Offset to retrieve.
</h2>

```php
/**
 * Offset to retrieve.
 *
 * @param mixed $offset The offset to retrieve.
 */
public function offsetGet($offset)
```

#### Examples

```php
$arrays = Arrays::create(['items' => ['foo' => 'Foo', 'bar' => 'Bar']]);

print_r($arrays->offsetGet('items.foo'));
print_r($arrays['items.bar']);
```

#### The above example will output:

```text
Foo
Bar
```
