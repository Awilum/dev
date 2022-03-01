---
title: sha256
template: glowyphp/component
description: Generate a sha256 hash string from the input string.
---

```php
/**
 * Generate a sha256 hash string from the input string.
 *
 * @param  string $raw_output When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits. Default is FALSE
 *
 * @return self Returns instance of The Strings class.
 */
public function sha256(bool $raw_output = false): self
```

#### Examples

```php
$result = Strings::create('test')->sha256();

echo $result;
```

#### The above example will output:

```text
9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08
```
