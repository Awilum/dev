---
title: path
template: glowyphp/component
description: Return current path.
class: file
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
$result = $filesystem->file('/foo/1.txt')->path();
```

#### The above example will output:

```text
/foo/1.txt
```
