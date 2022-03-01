---
title: path
template: glowyphp/component
description: Return current path.
class: directory
---

```php
/**
 * Return current path.
 *
 * @return string|null Current path
 */
public function path(): ?string
```

#### Examples

```php
$result = $filesystem->directory('/foo')->path();
```
