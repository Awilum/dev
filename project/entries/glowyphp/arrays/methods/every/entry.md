---
title: every
template: glowyphp/component
description: Verifies that all elements pass the test of the given callback.
---

<h2 class="font-normal text-lg">
Verifies that all elements pass the test of the given callback.
</h2>

```php
/**
 * Verifies that all elements pass the test of the given callback.
 *
 * @param Closure $callback Function with (value, key) parameters and returns TRUE/FALSE
 *
 * @return bool TRUE if all elements pass the test, FALSE if if fails for at least one element
 */
public function every(Closure $callback): bool
```

#### Examples

```php
$arrays1 = Arrays::create([0 => 'Foo', 1 => 'Bar'])->every(function($value, $key) {
    return is_string($value);
});

$arrays2 = Arrays::create([0 => 'Foo', 1 => 42])->every(function($value, $key) {
    return is_string($value);
});

var_dump($arrays1);
var_dump($arrays2);
```

#### The above example will output:

```text
bool(true)
bool(false)
```
