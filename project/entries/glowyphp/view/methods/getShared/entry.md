---
title: getShared
template: glowyphp/component
description: Share data with all views.
---

```php
/**
 * Get shared data.
 *
 * @return mixed
 */
public static function getShared()
```

#### Examples

```php
$sharedData = View::getShared('foo', 'Foo');
```