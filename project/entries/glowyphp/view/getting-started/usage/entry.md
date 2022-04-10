---
title: Usage
template: glowyphp/component
---

```php
use Glowy\View\View;

// Create View instance using public method __construct()
$view = new View('welcome');

// Create View instance using global helper function view()
$view = view('welcome');

// Display View.
$view->display();
```

### Extending <a name="extend"></a>

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

### Escaping helpers <a name="escaping-helpers"></a>

```php
echo e("<a href='test'>Test</a>");

// &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
```
