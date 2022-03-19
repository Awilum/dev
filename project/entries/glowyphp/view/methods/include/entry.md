---
title: includeFirst
template: glowyphp/component
description: Include view and display.
---

```php
/**
 * Include first view that exists in a given array of views.
 *
 * @param array         $views    Views array.
 * @param array         $data     View data.
 * @param callable|null $callback Callback function used to filter output.
 *
 * @throws ViewInvalidArgumentException
 */
public function includeFirst(array $views, array $data = [], ?callable $callback = null): void
```

#### Examples

```php
// Include view.
$view->include('welcome', ['name' => 'Eleven']);

// Include view with callback function used to filter output.
$view->include('welcome', ['name' => 'Eleven'], function ($output) {
    // Filter the output end return result 
    return $output;
});
```