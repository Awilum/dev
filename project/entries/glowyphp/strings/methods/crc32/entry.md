---
title: crc32
template: glowyphp/component
description: Generate the crc32 polynomial from the input string.
---

```php
/**
 * Generate the crc32 polynomial from the input string.
 *
 * @return int Returns crc32 polynomial from the input string.
 */
public function crc32(): int
```

#### Examples

```php
$result = Strings::create('test')->crc32();

echo $result;
```

#### The above example will output:

```text
3632233996
```
