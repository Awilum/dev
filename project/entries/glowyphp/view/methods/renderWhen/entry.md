---
title: renderWhen
template: glowyphp/component
description: Render the view file and extracts the view variables before returning the generated output based on a given condition.
---

```php
/**
 * Render the view file and extracts the view variables before returning the generated output
 * based on a given condition.
 *
 * @param bool          $condition Condition to check.
 * @param callable|null $callback  Callback function used to filter output.
 *
 * @return string View content.
 */
public function renderWhen(bool $condition, ?callable $callback = null): string
```

#### Examples

```php
$condition = true;

// Render view.
echo $view->renderWhen($condition);

// Render view and filter output.
echo $view->renderWhen($condition, function ($output) {
    // Filter the output end return result 
    return $output;
});
```