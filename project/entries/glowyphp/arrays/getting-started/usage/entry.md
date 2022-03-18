---
title: Usage
template: glowyphp/component
seo:
  title: Usage of Arrays Package for Advanced Arrays Manipulations
  description: Usage Enterprise-ready Arrays Package for working with arrays, allowing you to chain multiple arrays operations together using a more readable syntax compared to traditional PHP arrays functions
---

```php
use Glowy\Arrays\Arrays;

// Using public method __construct()
$arrays = new Arrays();

// Using public static method create()
$arrays = Arrays::create();

// Using global helper function arrays() alias to Arrays::create()
$arrays = arrays();
```

### Extending

Arrays are "macroable", which allows you to add additional methods to the Arrays class at run time. For example, the following code adds a customMethod method to the Arrays class:<br><br>

```php
use Glowy\Arrays\Arrays;
use Glowy\Macroable\Macroable;

Arrays::macro('customMethod', function($arg1 = 1, $arg2 = 1) {
    return $this->count() + $arg1 + $arg2;
});

$arrays = new Arrays([1, 2, 3]);

echo $arrays->customMethod(1, 2);
echo $arrays->customMethod();
```

#### The above example will output:

```
6
5
```
