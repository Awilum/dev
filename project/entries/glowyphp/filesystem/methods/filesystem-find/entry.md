---
title: find
template: glowyphp/component
description: Create a File instance.
class: filesystem
---

```php
/**
 * Create a Finder instance.
 */
public function find(): Finder
```

#### Examples

```php
$find = $filesystem->find()->in('/foo')->files()->name('*.txt');
```
