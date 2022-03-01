---
title: repeat
template: glowyphp/component
description: Returns a repeated string given a multiplier.
---

```php
/**
 * Returns a repeated string given a multiplier.
 *
 * @param int $multiplier The number of times to repeat the string.
 *
 * @return self Returns instance of The Strings class.
 */
public function repeat(int $multiplier): self
```

#### Examples

```php
$string = Strings::create('fòô')->repeat(3);

echo $string;
```

#### The above example will output:

```text
fòôfòôfòô
```
