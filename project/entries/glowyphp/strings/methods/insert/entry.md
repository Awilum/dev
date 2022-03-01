---
title: insert
template: glowyphp/component
description: Inserts $substring into the string at the $index provided.
---

```php
/**
 * Inserts $substring into the string at the $index provided.
 *
 * @param string $substring Substring
 * @param int    $index     Index
 *
 * @return self Returns instance of The Strings class.
 */
public function insert(string $substring, int $index): self
```

#### Examples

```php
$string1 = Strings::create('world')->insert('hello ', 0);
$string2 = Strings::create('hello')->insert(' world', 5);

echo $string1;

echo $string2;
```

#### The above example will output:

```text
hello world
hello world
```
