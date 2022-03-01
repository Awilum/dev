---
title: similarity
template: glowyphp/component
description: Calculate the similarity between two strings.
---

```php
/**
 * Calculate the similarity between two strings.
 *
 * @param string $string The delimiting string.
 *
 * @return float Returns similarity percent.
 */
public function similarity(string $string): float
```

#### Examples

```php
$result1 = Strings::create('hello')->similarity('hello');

$result2 = Strings::create('hello world')->similarity('hello');

echo $result1;

echo $result2;
```

#### The above example will output:

```text
100

62.5
```
