---
title: indexOf
template: glowyphp/component
description: Alias of search() method. Search for a given item and return the index of its first occurrence.
---

<h2 class="font-normal text-lg">
Alias of search() method. Search for a given item and return the index of its first occurrence.
</h2>

```php
/**
 * Alias of search() method. Search for a given item and return
 * the index of its first occurrence.
 *
 * @param mixed $needle The searched value.
 */
public function indexOf($needle)
```

#### Examples

```php
$result = Arrays::create([0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red'])->indexOf('green');

print_r($result);
```

#### The above example will output:

```text
2
```
