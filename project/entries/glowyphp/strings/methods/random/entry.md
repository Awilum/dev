---
title: random
template: glowyphp/component
description: Creates a random string of characters.
---

```php
/**
 * Creates a random string of characters.
 *
 * @param  int    $length   The number of characters. Default is 16
 * @param  string $keyspace The keyspace
 *
 * @return self Returns instance of The Strings class.
 */
public function random(int $length = 64,
                       string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'): self
```

#### Examples

```php
// Get random string with predefined settings
$string1 = Strings::create()->random();

// Get random string with custom length
$string2 = Strings::create()->random(10);

// Get random string with custom length and custom keyspace
$string3 = Strings::create()->random(4, '0123456789');

echo $string1;
echo $string2;
echo $string3;
```

#### The above example will output:

```text
SSMXmkkMJWjPZQMIInODxFHwSmbHMmrXn5mxCjPGYMlZ7zwZjG66Ve1Iz9A1kPGS

UXPYynne8Y

7441
```
