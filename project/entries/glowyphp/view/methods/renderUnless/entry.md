---
title: renderUnless
template: glowyphp/component
description: Render the view file and extracts the view variables before returning the generated output based on the negation of a given condition.
---

```php
/**
 * Render the view file and extracts the view variables before returning the generated output
 * based on the negation of a given condition.
 *
 * @param bool          $condition Condition to check.
 * @param callable|null $callback  Callback function used to filter output.
 *
 * @return string View content.
 */
public function renderUnless(bool $condition, ?callable $callback = null): string
```

#### Examples

```php
$condition = false;

// Render view.
echo $view->renderUnless($condition);

// Render view and filter output.
echo $view->renderUnless($condition, function ($output) {
    // Filter the output end return result 
    return $output;
});
```