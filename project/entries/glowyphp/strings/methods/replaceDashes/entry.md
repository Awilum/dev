---
title: replaceDashes
template: glowyphp/component
description: Replace all dashes characters in the string with the given value.
---

```php
/**
 * Replace all dashes characters in the string with the given value.
 *
 * @param string $replacement Value to replace dashes characters with replacement. Default is ''
 * @param bool   $strict      Should spaces be preserved or not. Default is false.
 *
 * @return self Returns instance of The Strings class.
 */
public function replaceDashes(string $replacement = '', bool $strict = false): self
```

#### Examples

```php
// Replace all dashes characters in the string
$string1 = Strings::create('Fòôbàřs - Fòô - bàřs')->replaceDashes()->toString();

// Replace all dashes characters in the string with _
$string2 = Strings::create('Fòôbàřs-Fòô-bàřs')->replaceDashes('_')->toString();

// Replace all dashes characters in the string with _ and and replace all spaces.
$string3 = Strings::create('Fòôbàřs-Fòô-bàřs')->replaceDashes('_', true)->toString();

echo $string1;

echo $string2;

echo $string3;
```

#### The above example will output:

```text
Fòôbàřs  Fòô  bàřs

Fòôbàřs_Fòô_bàřs

Fòôbàřs_Fòô_bàřs
```
