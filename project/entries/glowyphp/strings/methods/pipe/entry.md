---
title: pipe
template: glowyphp/component
description: Passes the strings to the given callback and return the result.
---

```php
/**
 * Passes the strings to the given callback and return the result.
 *
 * @param Closure $callback Function with strings as parameter which returns arbitrary result.
 *
 * @return mixed Result returned by the callback.
 */
public function pipe(Closure $callback)
```

#### Examples

```php
$string = Strings::create('Fòô');

$string->pipe(static function ($string) {
    $word = ' bàřs';
    return $string->append($word);
});

echo $string;
```

#### The above example will output:

```text
Fòô bàřs
```
