---
title: setEncoding
template: glowyphp/component
description: Set the character encoding.
---

```php
/**
 * Set the character encoding.
 *
 * @param string $encoding Character encoding.
 *
 * @return self Returns instance of The Strings class.
 */
public function setEncoding(string $encoding): self
```

#### Examples

```php
$string = Strings::create('SG-1 returns from an off-world mission')->setEncoding('UTF-8');

echo $string;
```
