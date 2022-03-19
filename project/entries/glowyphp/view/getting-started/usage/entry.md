---
title: Usage
template: glowyphp/component
---

```php
use Glowy\View\View;

// Create View instance using public method __construct()
$strings = new View();

// Create View instance using global helper function view()
$strings = view();
```

### Extending

View are "macroable", which allows you to add additional methods to the View class at run time. For example, the following code adds a customMethod method to the View class:
<br><br>
```php
use Glowy\Strings\View;
use Glowy\Macroable\Macroable;

View::macro('customMethod', function($arg1 = 1, $arg2 = 1) {
    return $arg1 + $arg2;
});

$view = new View();

echo $view->customMethod();
echo $view->customMethod(2, 2);
```

#### The above example will output:

```text
2
4
```
