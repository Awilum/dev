---
title: getSection
template: glowyphp/component
description: Get section.
---

```php
/**
 * Get section.
 *
 * @param string $section Section name.
 * @param mixed  $default Default data to display.
 * 
 * @return mixed
 */
public function getSection(string $section, $default = null)
```

#### Exampless

```php
$section = $view->getSection('foo', 'bar');
```