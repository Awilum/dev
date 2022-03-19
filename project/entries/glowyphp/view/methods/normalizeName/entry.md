---
title: denormalizeName
template: glowyphp/component
description: Denormalize view name.
---

```php
/**
 * Denormalize view name.
 *
 * @param string $view View name.
 */
public static function denormalizeName(string $view): string
```

#### Examples

```php
echo View::denormalizeName('user.welcome');
```

#### The above example will output:

```text
user/welcome
```