---
title: includeWhen
template: glowyphp/component
description: Include view and display based on a given condition.
---

```php
/**
 * Include view and display based on a given condition.
 *
 * @param bool          $condition Condition to check.
 * @param string        $view      View name.
 * @param array         $data      View data.
 * @param callable|null $callback  Callback function used to filter output.
 * 
 * @return void Return void.
 */
public function includeWhen(bool $condition, string $view, array $data = [], ?callable $callback = null): void
```

#### Examples

```php
$condition = true;

// Include view.
$view->includeWhen($condition, 'welcome', ['name' => 'Eleven']);

// Include view with callback function used to filter output.
$view->includeWhen($condition, 'welcome', ['name' => 'Eleven'], function ($output) {
    // Filter the output end return result 
    return $output;
});
```