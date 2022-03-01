---
title: hasMacro
template: glowyphp/component
description: Checks if macro is registered.
---

```php
/**
 * Checks if macro is registered.
 *
 * @param  string  $name Name
 * @return bool
 */
public static function hasMacro(string $name): bool
```

#### Examples

```php
$macroableClass = new class() {
    use Macroable;
};

$macroableClass::macro('message', function($name) {
   return 'Hello ' . $name;
});

if ($macroableClass::hasMacro('message')) {
    // do something...
}
```
