---
title: search
template: glowyphp/component
description: Searches the array for a given value and returns the first corresponding key if successful.
---

<h2 class="font-normal text-lg">
Searches the array for a given value and returns the first corresponding key if successful.
</h2>

```php
/**
 * Searches the array for a given value and returns the first corresponding key if successful.
 *
 * @param mixed $needle The searched value.
 */
public function search($needle)
```

#### Examples

```php
$result = Arrays::create([0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red'])->search('green');

print_r($result);
```

#### The above example will output:

```text
2
```
