---
title: trimRight
template: glowyphp/component
description: Strip whitespace (or other characters) from the end of a string.
---

```php
/**
 * Strip whitespace (or other characters) from the end of a string.
 *
 * @param string $character_mask Stripped characters can also be specified using the character_mask parameter.
 *
 * @return self Returns instance of The Strings class.
 */
public function trimRight(?string $character_mask = null): self
```

#### Examples

```php
$string = Strings::create('daniel ')->trimRight();

echo $string;
```

#### The above example will output:

```text
daniel
```
