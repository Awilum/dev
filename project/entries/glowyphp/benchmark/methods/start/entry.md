---
title: start
template: glowyphp/component
description: Start benchmark prob.
seo:
  title: Start benchmark prob | start
  description: You may end the benchmark prob with help of method start
---

<h2 class="font-normal text-lg">
Start benchmark prob.
</h2>

```php
/**
 * Start benchmark prob.
 * 
 * @param string $name prob name
 */
public static function start(string $name = 'default'): void
```

#### Examples

```php
Benchmark::start('prob name');
```
