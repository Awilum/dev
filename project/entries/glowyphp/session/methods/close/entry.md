---
title: close
template: glowyphp/component
description: Force the session to be saved and closed. Session data is usually stored after your script terminated without the need to call close(), but as session data is locked to prevent concurrent writes only one script may operate on a session at any time. When using framesets together with sessions you will experience the frames loading one by one due to this locking. You can reduce the time needed to load all the frames by ending the session as soon as all changes to session variables are done.
---

```php
/**
 * Force the session to be saved and closed.
 *
 * Session data is usually stored after your script terminated without the need
 * to call close(), but as session data is locked to prevent concurrent
 * writes only one script may operate on a session at any time. When using
 * framesets together with sessions you will experience the frames loading one
 * by one due to this locking. You can reduce the time needed to load all the
 * frames by ending the session as soon as all changes to session variables are
 * done.
 */
public function close(): void
```

#### Examples

```php
$session->close();
```
