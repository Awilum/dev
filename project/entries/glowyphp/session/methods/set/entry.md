---
title: set
template: glowyphp/component
description: Sets an session attribute by key.
---

```php
/**
 * Sets an session attribute by key.
 *
 * @param string $key   The key of the element to set.
 * @param mixed  $value The data to set.
 */
public function set(string $key, $value): void
```

#### Examples

```php
$session->set('foo', 'bar');
```
