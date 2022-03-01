---
title: setId
template: glowyphp/component
description: Sets the session ID.
---

```php
/**
 * Sets the session ID.
 *
 * @param string $id The session id.
 *
 * @throws SessionException On error.
 */
public function setId(string $id): void
```

#### Examples

```php
$session->setId('foo');
```
