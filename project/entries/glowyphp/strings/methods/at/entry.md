---
title: at
template: glowyphp/component
description: Returns the character at $index, with indexes starting at 0.
---

```php
/**
 * Returns the character at $index, with indexes starting at 0.
 *
 * @param int $index Position of the character.
 */
public function at(int $index): self
```

#### Examples

```php
$character = Strings::create('hello')->at(3);

echo $character;
```

#### The above example will output:

```text
l
```
