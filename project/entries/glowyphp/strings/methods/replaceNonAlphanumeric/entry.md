---
title: replaceNonAlphanumeric
template: glowyphp/component
description: Replace none alphanumeric characters in the string with the given value.
---

```php
/**
 * Replace none alphanumeric characters in the string with the given value.
 *
 * @param string $replacement Value to replace none alphanumeric characters with. Default is ''
 * @param bool   $strict      Should spaces be preserved or not. Default is false.
 *
 * @return self Returns instance of The Strings class.
 */
public function replaceNonAlphanumeric(string $replacement = '', bool $strict = false): self
```

#### Examples

```php
// Replace symbols -
$string1 = Strings::create('Fòô-bàřs-123')->replaceNonAlphanumeric();

// Replace symbols - with _
$string2 = Strings::create('Fòô-bàřs-123')->replaceNonAlphanumeric('_');

// Replace symbols - with _ and replace all spaces.
$string3 = Strings::create('Fòô-bàřs-123')->replaceNonAlphanumeric('_', true);

echo $string1;

echo $string2;

echo $string3;
```

#### The above example will output:

```text
Fòôbàřs123

Fòô_bàřs_123

Fòô_bàřs_123
```
