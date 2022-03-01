---
title: next
template: glowyphp/component
description: Moves the internal iterator position to the next element and returns this element.
---

<h2 class="font-normal text-lg">
Moves the internal iterator position to the next element and returns this element.
</h2>

```php
/**
 * Moves the internal iterator position to the next element and returns this element.
 */
public function next()
```

#### Examples

```php
$arrays = Arrays::create([0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red'])->next()

print_r($arrays);
```

#### The above example will output:

```text
red
```
