---
title: hash
template: glowyphp/component
description: Generate a hash string from the input string.
---

```php
/**
 * Generate a hash string from the input string.
 *
 * @param  string $string     String
 * @param  string $algorithm  Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..).
 *                            For a list of supported algorithms see hash_algos(). Default is md5.
 * @param  string $raw_output When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits. Default is FALSE
 *
 * @return self Returns instance of The Strings class.
 */
public function hash(string $algorithm = 'md5', bool $raw_output = false): self
```

#### Examples

```php
// Get string hash with predefined settings
$result1 = Strings::create('SG-1 returns from an off-world mission')->hash();

// Get string hash with hashed with sha256 algorithm
$result2 = Strings::create('SG-1 returns from an off-world mission')->hash('sha256');

// Get string hash with hashed with sha256 algorithm and with raw output
$result3 = Strings::create('SG-1 returns from an off-world mission')->hash('sha256', true);
```

#### The above example will output:

```text
db2a79c6c6e8739ede589fa9bc69b10d16851eab9c46ea43de33a38c37e42eeb11713f0a76f4931f1b0a860c48b966c8???F?C?3??7?.?q?

v??

H?f?
```
