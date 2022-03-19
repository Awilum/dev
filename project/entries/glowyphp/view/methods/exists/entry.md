---
title: exists
template: glowyphp/component
description: Determining If A View Exists
---

```php
/**
 * Determining If A View Exists
 *
 * @param string $view View name.
 * 
 * @return bool Returns true or false view doesnt exists.
 */
public static function exists(string $view): bool
```

#### Examples

```php
if (View::exists('welcome')) {
    // do something...
}
```