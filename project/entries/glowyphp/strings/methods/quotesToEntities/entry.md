---
title: quotesToEntities
template: glowyphp/component
description: Convert single and double quotes to entities.
---

```php
/**
 * Convert single and double quotes to entities.
 *
 * @param  string $string String with single and double quotes
 *
 * @return self Returns instance of The Strings class.
 */
public function quotesToEntities(): self
```

#### Examples

```php
$string = Strings::create('some "text" here')->quotesToEntities();

echo $string;
```

#### The above example will output:

```text
some "text" here
```
