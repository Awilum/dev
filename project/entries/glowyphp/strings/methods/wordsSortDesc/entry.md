---
title: wordsSortDesc
template: glowyphp/component
description: Sort words in string descending.
---

```php
/**
 * Sort words in string descending.
 *
 * @return self Returns instance of The Strings class.
 */
public function wordsSortDesc(): self
```

#### Examples

```php
$string = Strings::create('car fòô bàřs apple')->wordsSortDesc();

echo $string;
```

#### The above example will output:

```text
fòô car bàřs apple
```
