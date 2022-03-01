---
title: lines
template: glowyphp/component
description: Get array of individual lines in the string.
---

```php
/**
 * Get array of individual lines in the string.
 *
 * @return array Returns array of lines.
 */
public function lines(): array
```

#### Examples

```php
$lines = Strings::create("Fòô òô\n fòô fò fò \nfò\r")->lines();

echo $lines;
```

#### The above example will output:

```text
Array
(
    [0] => Fòô òô
    [1] =>  fòô fò fò
    [2] => fò
)
```
