---
title: between
template: glowyphp/component
description: Get the portion of a string between two given values.
---

```php
/**
 * Get the portion of a string between two given values.
 *
 * @param  string $from From
 * @param  string $to   To
 *
 * @return self Returns instance of The Strings class.
 */
public function between(string $from, string $to): self
```

#### Examples

```php
$string = Strings::create('SG-1 returns from an off-world mission')->between('SG-1', 'from');

echo $string;
```

#### The above example will output:

```text
 returns
```
