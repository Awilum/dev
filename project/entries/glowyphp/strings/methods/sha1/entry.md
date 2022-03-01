---
title: sha1
template: glowyphp/component
description: Generate a sha1 hash string from the input string.
---

```php
/**
 * Generate a sha1 hash string from the input string.
 *
 * @param  string $raw_output When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits. Default is FALSE
 *
 * @return self Returns instance of The Strings class.
 */
public function sha1(bool $raw_output = false): self
```

#### Examples

```php
$result = Strings::create('test')->sha1();

echo $result;
```

#### The above example will output:

```text
a94a8fe5ccb19ba61c4c0873d391e987982fbbd3
```
