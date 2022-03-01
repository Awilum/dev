---
title: get
template: glowyphp/component
description: Gets an attribute by key.
---

```php
/**
 * Gets an attribute by key.
 *
 * @param string $key The key name.
 *
 * @return mixed|null Should return null if the key is not found.
 */
public function get(string $key)
```

#### Examples

```php
$result = $session->get('foo');
```
