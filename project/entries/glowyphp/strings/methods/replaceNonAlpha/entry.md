---
title: replaceNonAlpha
template: glowyphp/component
description: Replace none alpha characters in the string with the given value.
---

```php
/**
 * Replace none alpha characters in the string with the given value.
 *
 * @param string $replacement Value to replace none alpha characters with
 * @param bool   $strict      Should spaces be preserved or not. Default is false.
 *
 * @return self Returns instance of The Strings class.
 */
public function replaceNonAlpha(string $replacement = '', bool $strict = false): self
```

#### Examples

```php
// Replace none alpha characters in the string
$string1 = Strings::create('Fòô-bàřs-123')->replaceNonAlpha();

// Replace none alpha characters in the string with _
$string2 = Strings::create('Fòô-bàřs-123')->replaceNonAlpha('_');

// Replace none alpha characters in the string with _ and replace all spaces.
$string3 = Strings::create('Fòô-bàřs-123')->replaceNonAlpha('_', true);

echo $string1;

echo $string2;

echo $string3;
```

#### The above example will output:

```text
Fòôbàřs

Fòô_bàřs_

Fòô_bàřs_
```
