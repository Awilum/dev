---
title: includeUnless
template: glowyphp/component
description: Include view and display based on the negation of a given condition.
---

```php
/**
 * Include view and display based on the negation of a given condition.
 *
 * @param bool          $condition Condition to check.
 * @param string        $view      View name.
 * @param array         $data      View data.
 * @param callable|null $callback  Callback function used to filter output.
 * 
 * @return void Return void.
 */
public function includeUnless(bool $condition, string $view, array $data = [], ?callable $callback = null): void
```

#### Examples

```php
$condition = false;

// Include view.
$view->includeUnless($condition, 'welcome', ['name' => 'Eleven']);

// Include view with callback function used to filter output.
$view->includeUnless($condition, 'welcome', ['name' => 'Eleven'], function ($output) {
    // Filter the output end return result 
    return $output;
});
```