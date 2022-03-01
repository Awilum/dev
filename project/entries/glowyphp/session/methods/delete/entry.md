---
title: delete
template: glowyphp/component
description: Deletes an attribute by key.
---

```php
/**
 * Deletes an attribute by key.
 *
 * @param string $key The key to remove.
 */
public function delete(string $key): void
```

#### Examples

```php
$session->delete('foo');
```
