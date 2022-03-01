---
title: skip
template: glowyphp/component
description: Skip the first count items.
---

<h2 class="font-normal text-lg">
Skip the first count items.
</h2>

```php
/**
 * Skip the first count items.
 *
 * @param  int  $count Count of first items to skip.
 *
 * @return self Returns instance of The Arrays class.
 */
public function skip(int $count): self
```

#### Examples

```php
$arrays = Arrays::create(['a', 'b', 'c', 'd', 'e'])->skip(2)->toArray();

print_r($arrays);
```
