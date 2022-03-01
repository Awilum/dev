---
title: destroy
template: glowyphp/component
description: Deletes an attribute by key.
---

```php
/**
 * Invalidates the current session.
 * Clears all session data and regenerates session ID.
 *
 * @throws SessionException On error.
 */
public function destroy(): void
```

#### Examples

```php
$session->destroy();
```
