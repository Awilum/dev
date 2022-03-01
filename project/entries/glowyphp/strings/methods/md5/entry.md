---
title: md5
template: glowyphp/component
description: Generate a md5 hash string from the input string.
---

```php
/**
 * Generate a md5 hash string from the input string.
 *
 * @param  string $raw_output When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits. Default is FALSE
 *
 * @return self Returns instance of The Strings class.
 */
public function md5(bool $raw_output = false): self
```

#### Examples

```php
$result = Strings::create('test')->md5();

echo $result;
```

#### The above example will output:

```text
098f6bcd4621d373cade4e832627b4f6
```
