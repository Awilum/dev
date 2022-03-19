---
title: share
template: glowyphp/component
description: Share data with all views.
---

```php
/**
 * Share data with all views.
 *
 * @param  array|string $key   Data key
 * @param  mixed|null   $value Data value
 * 
 * @return mixed
 */
public static function share($key, $value)
```

#### Examples

```php
View::share('foo', 'Foo');
```