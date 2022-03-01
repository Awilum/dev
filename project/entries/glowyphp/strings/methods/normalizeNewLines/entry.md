---
title: normalizeNewLines
template: glowyphp/component
description: Standardize line endings to unix-like.
---

```php
/**
 * Standardize line endings to unix-like.
 *
 * @return self Returns instance of The Strings class.
 */
public function normalizeNewLines(): self
```

#### Examples

```php
$string = Strings::create('SG-1 returns from an off-world mission')->normalizeNewLines();
```
