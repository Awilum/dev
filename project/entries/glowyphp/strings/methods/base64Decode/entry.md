---
title: base64Decode
template: glowyphp/component
description: Decodes data encoded with MIME base64
---

```php
/**
 * Decodes data encoded with MIME base64
 *
 * @return self Returns instance of The Strings class.
 */
public function base64Decode(): self
```

#### Examples

```php
$result = Strings::create('dGVzdA==')->base64Decode();

echo $result;
```

#### The above example will output:

```text
test
```
