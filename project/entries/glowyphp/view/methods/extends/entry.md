---
title: extends
template: glowyphp/component
description: Extend parent view.
---

```php
/**
 * Extend parent view.
 *
 * @param string $view View name to extend.
 * @param array  $data View data.
 * 
 * @return void Return void.
 */
public function extends(string $view, array $data = []): void
```

#### Examples

```php
$view->extends('welcome', ['name' => 'Eleven']);
```