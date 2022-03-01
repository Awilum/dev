---
title: getEncoding
template: glowyphp/component
description: Get character encoding.
---

```php
/**
 * Get character encoding.
 *
 * @return string Returns internal encoding.
 */
public function getEncoding(): string
```

#### Examples

```php
$encoding = Strings::create('SG-1 returns from an off-world mission', 'UTF-8')->getEncoding();
```
