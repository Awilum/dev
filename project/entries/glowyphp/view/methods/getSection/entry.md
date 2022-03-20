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

#### Examples

```php
echo $view->getSection('foo', 'bar');
```