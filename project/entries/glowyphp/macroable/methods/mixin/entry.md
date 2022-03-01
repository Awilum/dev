---
title: mixin
template: glowyphp/component
description: Mix another object into the class.
---

```php
/**
 * Mix another object into the class.
 *
 * @param  object  $mixin   Mixin.
 * @param  bool    $replace Replace.
 * @return void
 *
 * @throws ReflectionException
 */
public static function mixin($mixin, bool $replace = true): void
```

#### Examples

```php
$mixinClass = new class() {
    public function mixinMethod()
    {
       return function() {
          return 'mixinMethod';
       };
    }

    public function anotherMixinMethod()
    {
       return function() {
          return 'anotherMixinMethod';
       };
    }
};

$macroableClass->mixin($mixin);

$macroableClass->mixinMethod();
$macroableClass->anotherMixinMethod();
```

#### The above example will output:

```
mixinMethod
anotherMixinMethod
```
