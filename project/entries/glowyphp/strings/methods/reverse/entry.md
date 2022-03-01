---
title: reverse
template: glowyphp/component
description: Reverses string.
---

```php
/**
 * Reverses string.
 *
 * @return self Returns instance of The Strings class.
 */
public function reverse(): self
```

#### Examples

```php
$string = Strings::create('SG-1 returns from an off-world mission')->reverse();

echo $string;
```

#### The above example will output:

```text
noissim dlrow-ffo na morf snruter 1-GS
```
