---
title: prependSection
template: glowyphp/component
description: Start new prepend section.
---

```php
/**
 * Start new prepend section.
 *
 * @param string $section The name of the section.
 */
public function prependSection(string $section): void
```

#### Examples

```php
// Create new section with prepend mode
$view->prependSection('foo');
echo 'Foo';
$view->endSection();

// Display section
echo $view->getSection('foo');
```