---
title: wordsSortAsc
template: glowyphp/component
description: Sort words in string ascending.
---

```php
/**
 * Sort words in string ascending.
 *
 * @return self Returns instance of The Strings class.
 */
public function wordsSortAsc(): self
```

#### Examples

```php
$string = Strings::create('car fòô bàřs apple')->wordsSortAsc();

echo $string;
```

#### The above example will output:

```text
apple bàřs car fòô
```
