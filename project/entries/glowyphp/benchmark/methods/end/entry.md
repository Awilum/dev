---
title: end
template: glowyphp/component
description: End benchmark prob.
seo:
  title: End benchmark prob | end
  description: You may end the benchmark prob with help of method end
---

<h2 class="font-normal text-lg">
End benchmark prob.
</h2>

```php
/**
 * End benchmark prob.
 * 
 * @param string $name prob name
 */
public static function end(string $name = 'default'): void
```

#### Examples

```php
Benchmark::end('prob name');
```
