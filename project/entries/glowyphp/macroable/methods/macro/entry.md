---
title: macro
template: glowyphp/component
description: Register a custom macro.
---

```php
/**
 * Register a custom macro.
 *
 * @param  string           $name   Name.
 * @param  object|callable  $macro  Macro.
 * @return void
 */
public static function macro(string $name, $macro): void
```

#### Examples

```php
$macroableClass = new class() {
    use Macroable;
};

$macroableClass::macro('concatenate', function(... $strings) {
   return implode('-', $strings);
});

$macroableClass::macro('message', function($name) {
   return 'Hello ' . $name;
});

echo $macroableClass->concatenate('one', 'two', 'three');
echo $macroableClass->message('Jack');
```

#### The above example will output:

```
one-two-three
Hello Jack
```
