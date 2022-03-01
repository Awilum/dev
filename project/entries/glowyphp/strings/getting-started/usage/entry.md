---
title: Usage
template: glowyphp/component
---

```php
use Atomastic\Strings\Strings;

// Create Strings instance using public method __construct()
$strings = new Strings();

// Create Strings instance using public static method create()
$strings = Strings::create();

// Create Strings instance using global helper function strings()
$strings = strings();
```

### Extending

Strings are "macroable", which allows you to add additional methods to the Strings class at run time. For example, the following code adds a customMethod method to the Strings class:
<br><br>
```php
use Atomastic\Strings\Strings;
use Atomastic\Macroable\Macroable;

Strings::macro('concatenate', function(string $string) {
    return $this->toString() . $string;
});

$strings = new Strings('Hello');

echo $strings->concatenate(' World');
```

#### The above example will output:

```text
Hello World
```
