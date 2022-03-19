---
title: fetchFirst
template: glowyphp/component
description: Fetch first view that exists in a given array of views.
---

```php
/**
 * Fetch first view that exists in a given array of views.
 *
 * @param array         $views    Views array.
 * @param array         $data     View data.
 * @param callable|null $callback Callback function used to filter output.
 *
 * @throws ViewInvalidArgumentException
 * 
 * @return string
 */
public function fetchFirst(array $views, array $data = [], ?callable $callback = null): string
```

#### Examples

```php
// Fetch view.
echo $view->fetchFirst(['welcome', 'user.welcome'], ['name' => 'Eleven']);

// Fetch view with callback function used to filter output.
echo $view->fetchFirst(['welcome', 'user.welcome'], ['name' => 'Eleven'], function ($output) {
    // Filter the output end return result 
    return $output;
});
```