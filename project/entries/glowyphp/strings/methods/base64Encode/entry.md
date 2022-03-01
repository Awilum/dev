---
title: base64Encode
template: glowyphp/component
description: Encodes data with MIME base64.
---

```php
/**
 * Encodes data with MIME base64.
 *
 * @return self Returns instance of The Strings class.
 */
public function base64Encode(): self
```

#### Examples

```php
$result = Strings::create('test')->base64Encode();

echo $result;
```

#### The above example will output:

```text
dGVzdA==
```
