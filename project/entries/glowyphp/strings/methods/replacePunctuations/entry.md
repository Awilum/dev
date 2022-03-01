---
title: replacePunctuations
template: glowyphp/component
description: Replace all dashes characters in the string with the given value.
---

```php
/**
 * Replace all punctuations characters in the string with the given value.
 *
 * @param string $replacement Value to replace punctuations characters with replacement. Default is ''
 * @param bool   $strict      Should spaces be preserved or not. Default is false.
 *
 * @return self Returns instance of The Strings class.
 */
public function replacePunctuations(string $replacement = '', bool $strict = false): self
```

#### Examples

```php
// Replace all punctuations characters in the string
$string1 = Strings::create('Fòô. bàřs, bàřs')->replacePunctuations();

// Replace all punctuations characters in the string with -
$string2 = Strings::create('Fòô. bàřs, bàřs')->replacePunctuations('-');

// Replace all punctuations characters in the string with - and and replace all spaces.
$string3 = Strings::create('Fòô. bàřs, bàřs')->replacePunctuations('-', true);

echo $string1;

echo $string2;

echo $string3;
```

#### The above example will output:

```text
Fòô bàřs bàřs

Fòô- bàřs- bàřs

Fòô-bàřs-bàřs
```
