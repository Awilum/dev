---
title: regenerateId
template: glowyphp/component
description: Regenerates the session ID
---

```php
/**
 * Regenerates the session ID
 *
 * Migrates the current session to a new session id while maintaining all session attributes.
 *
 * @throws SessionException On error.
 */
public function regenerateId(): void
```

#### Examples

```php
$result = $session->regenerateId();
```
