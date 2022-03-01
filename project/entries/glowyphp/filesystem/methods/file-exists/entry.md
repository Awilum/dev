---
title: exists
template: glowyphp/component
description: Checks the existence of file and returns false if any of them is missing.
class: file
---

```php
/**
 * Checks the existence of file and returns false if any of them is missing.
 *
 * @return bool Returns true or false if any of them is missing.
 */
public function exists(): bool
```

#### Examples

```php
if ($filesystem->file('/foo/1.txt')->exists()) {
    // do something...
}
```
