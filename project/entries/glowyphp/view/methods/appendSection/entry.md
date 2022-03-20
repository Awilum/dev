---
title: appendSection
template: glowyphp/component
description: Start new append section.
---

```php
/**
 * Start new append section.
 *
 * @param string $section The name of the section.
 */
public function appendSection(string $section): void
```

#### Examples

```php
// Create new section with append mode
$view->appendSection('foo');
echo 'Foo';
$view->endSection();

// Display section
echo $view->getSection('foo');
```