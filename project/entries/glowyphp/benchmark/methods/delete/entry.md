---
title: delete
template: glowyphp/component
description: Delete benchmark prob.
seo:
  title: Delete benchmark prob. | delete
  description: You may delete benchmark prob with help of method delete
---

<h2 class="font-normal text-lg">
Delete benchmark prob.
</h2>

```php
/**
 * Delete benchmark prob.
 * 
 * @param string $name prob name
 */
public static function delete(string $name): void
```

#### Examples

```php
Benchmark::delete('prob name');
```

