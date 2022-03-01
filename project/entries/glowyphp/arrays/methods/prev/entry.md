---
title: prev
template: glowyphp/component
description: Rewind the internal iterator position and returns this element.
---

<h2 class="font-normal text-lg">
Rewind the internal iterator position and returns this element.
</h2>

```php
/**
 * Rewind the internal iterator position and returns this element.
 */
public function prev()
```

#### Examples

```php
$arrays = Arrays::create([0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red'])->prev()

print_r($arrays);
```

#### The above example will output:

```text
false
```
