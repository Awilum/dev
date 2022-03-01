---
title: pull
template: glowyphp/component
description: Gets an session attribute by key and remove it.
---

```php
/**
 * Gets an session attribute by key and remove it.
 *
 * @param string $key The key name.
 *
 * @return mixed|null Should return null if the key is not found.
 */
public function pull(string $key)
```

#### Examples

```php
$result = $session->pull('foo');
```
