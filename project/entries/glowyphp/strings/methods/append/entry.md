---
title: append
template: glowyphp/component
description: Append the given values to the string
---

```php
/**
 * Append the given values to the string.
 *
 * @param  string[] $values Values
 *
 * @return self Returns instance of The Strings class.
 */
public function append(string ...$values): self
```

#### Examples

```php
$string = Strings::create('PLAY HARD.')->append('WORK HARD. ');

echo $string;
```

#### The above example will output:

```text
PLAY HARD. WORK HARD.
```
