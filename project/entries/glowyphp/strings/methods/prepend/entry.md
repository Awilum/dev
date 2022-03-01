---
title: prepend
template: glowyphp/component
description: Prepend the given values to the string.
---

```php
/**
 * Prepend the given values to the string.
 *
 * @param  string[] $values Values
 *
 * @return self Returns instance of The Strings class.
 */
public function prepend(string ...$values): self
```

#### Examples

```php
$string = Strings::create('PLAY HARD.')->prepend('WORK HARD. ');

echo $string;
```

#### The above example will output:

```text
WORK HARD. PLAY HARD.
```
