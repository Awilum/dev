---
title: Usage
template: glowyphp/component
---

```php
use Atomastic\Filesystem\Filesystem;

// Create a Filesystem instance.
$filesystem = new Filesystem();

// Using global helper function filesystem()
$filesystem = filesystem();
```

### Extending

Filesystem are "macroable", which allows you to add additional methods to the Filesystem class at run time. For example, the following code adds a customMethod method to the Filesystem class:
<br><br>
```php
use Atomastic\Filesystem\Filesystem;
use Atomastic\Filesystem\Directory;
use Atomastic\Filesystem\File;
use Atomastic\Macroable\Macroable;

Filesystem::macro('countFiles', function($path) {
    return count(iterator_to_array($this->find()->in($path)->files(), false));
});

$filesytem = new Filesystem();

echo $filesytem->countFiles('/directory');
```

#### The above example will output:

```
1
```
