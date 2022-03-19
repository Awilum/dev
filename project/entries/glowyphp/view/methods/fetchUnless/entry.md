---
title: fetchUnless
template: glowyphp/component
description: Fetch view based on the negation of a given condition.
---

```php
/**
 * Fetch view based on the negation of a given condition.
 *
 * @param bool          $condition Condition to check.
 * @param string        $view      View name.
 * @param array         $data      View data.
 * @param callable|null $callback  Callback function used to filter output.
 *
 * @return string View content.
 */
public function fetchUnless(bool $condition, string $view, array $data = [], ?callable $callback = null): string
```

#### Examples

```php
$condition = false;

// Fetch view.
echo $view->fetchUnless($condition, 'welcome', ['name' => 'Eleven']);

// Fetch view with callback function used to filter output.
echo $view->fetchUnless($condition, 'welcome', ['name' => 'Eleven'], function ($output) {
    // Filter the output end return result 
    return $output;
});
```