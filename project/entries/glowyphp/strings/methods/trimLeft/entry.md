---
title: trimLeft
template: glowyphp/component
description: Strip whitespace (or other characters) from the beginning of a string.
---

```php
/**
 * Strip whitespace (or other characters) from the beginning of a string.
 *
 * @param string $character_mask Stripped characters can also be specified using the character_mask parameter.
 *
 * @return self Returns instance of The Strings class.
 */
public function trimLeft(?string $character_mask = null): self
```

#### Examples

```php
$string = Strings::create(' daniel')->trimLeft();

echo $string;
```

#### The above example will output:

```text
daniel
```
