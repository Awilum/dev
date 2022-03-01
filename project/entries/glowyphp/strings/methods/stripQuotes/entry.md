---
title: stripQuotes
template: glowyphp/component
description: Removes single and double quotes from a string.
---

```php
/**
 * Removes single and double quotes from a string.
 *
 * @return self Returns instance of The Strings class.
 */
public function stripQuotes(): self
```

#### Examples

```php
$string = Strings::create('some "text" here')->stripQuotes();

echo $string;
```

#### The above example will output:

```text
some text here
```
