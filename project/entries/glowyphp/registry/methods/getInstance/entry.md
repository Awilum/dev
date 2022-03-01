---
title: getInstance
template: glowyphp/component
description: Gets the Registry instance via lazy initialization (created on first usage).
seo:
  title: Gets the Registry instance via lazy initialization (created on first usage) | getInstance
  description: You may get the Registry instance via lazy initialization with help of method getInstance
---

<h2 class="font-normal text-lg">
Gets the Registry instance via lazy initialization (created on first usage).
</h2>

```php
/**
 * Gets the Registry instance via lazy initialization (created on first usage)
 */
public static function getInstance(): Registry
```

#### Examples

```php
$registry = Registry::getInstance();
```
