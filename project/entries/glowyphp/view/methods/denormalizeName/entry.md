---
title: normalizeName
template: glowyphp/component
description: Normalize view name.
---

```php
/**
 * Normalize view name.
 *
 * @param string $view View name.
 */
public static function normalizeName(string $view): string
```

#### Examples

```php
echo View::normalizeName('user/welcome');
```

#### The above example will output:

```text
user.welcome
```