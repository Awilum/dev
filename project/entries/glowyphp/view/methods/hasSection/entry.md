---
title: hasSection
template: glowyphp/component
description: Determine if section exists.
---

```php
/**
 * Determine if section exists.
 *
 * @param string $section Section name.
 *
 * @return bool Returns true or false section doesnt exists.
 */
public function hasSection(string $section): bool
```

#### Exampless

```php
$view->hasSection('foo');
```