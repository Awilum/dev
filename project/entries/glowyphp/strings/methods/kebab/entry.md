---
title: kebab
template: glowyphp/component
description: Convert a string to kebab case.
---

```php
/**
 * Convert a string to kebab case.
 *
 * @return self Returns instance of The Strings class.
 */
public function kebab(): self
```

#### Examples

```php
$string = Strings::create('fooBar')->kebab();

echo $string;
```

#### The above example will output:

```text
foo-bar
```
