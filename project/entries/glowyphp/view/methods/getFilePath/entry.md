---
title: getFilePath
template: glowyphp/component
description: Get view file path.
---

```php
/**
 * Get view file path.
 * 
 * @param string $view View name.
 * 
 * @return string Retruns view file path.
 */
public static function getFilePath(string $view): string
```

#### Examples

```php
$viewFilePath = View::getFilePath('welcome');
```