---
title: wordsCount
template: glowyphp/component
description: Get words count from the string.
---

```php
/**
 * Get words count from the string.
 *
 * @param string $ignore Ingnore symbols.
 *
 * @return int Returns words count.
 */
public function wordsCount(string $ignore = '?!;:,.'): int
```

#### Examples

```php
// Returns the number of words found
$result = Strings::create('SG-1 returns from an off-world mission')->wordsCount();

echo $result;
```

#### The above example will output:

```text
6
```
