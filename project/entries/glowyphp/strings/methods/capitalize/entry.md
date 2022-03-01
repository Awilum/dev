---
title: capitalize
template: glowyphp/component
description: Converts the first character of every word of string to upper case and the others to lower case.
---

```php
/**
 * Converts the first character of every word of string to upper case and the others to lower case.
 *
 * @return self Returns instance of The Strings class.
 */
public function capitalize(): self
```

#### Examples

```php
$result = Strings::create('that country was at the same stage of development as the United States in the 1940s')->capitalize();

echo $result;
```

#### The above example will output:

```text
That Country Was At The Same Stage Of Development As The United States In The 1940S
```
