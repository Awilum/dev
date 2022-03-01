---
title: exists
template: glowyphp/component
description: Checks the existence of directory and returns false if any of them is missing.
class: directory
---

```php
/**
 * Checks the existence of directory and returns false if any of them is missing.
 *
 * @return bool Returns true or false if any of them is missing.
 */
public function exists(): bool
```

#### Examples

```php
if ($filesystem->directory('/foo')->exists()) {
    // do something...
}
```
