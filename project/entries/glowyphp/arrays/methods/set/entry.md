---
title: set
template: glowyphp/component
description: Set an array item to a given value using "dot" notation.
---

<h2 class="font-normal text-lg">
Set an array item to a given value using "dot" notation.
</h2>

```php
/**
 * Set an array item to a given value using "dot" notation.
 *
 * If no key is given to the method, the entire array will be replaced.
 *
 * @param  string $key   Key
 * @param  mixed  $value Value
 */
public function set(string $key, $value): self
```

#### Examples

```php
$arrays = Arrays::create()->set('movies.the-thin-red-line.title', 'The Thin Red Line');
```
