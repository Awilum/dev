---
title: render
template: glowyphp/component
description: Render the view file and extracts the view variables before returning the generated output.
---

```php
/**
 * Render the view file and extracts the view variables before returning the generated output.
 *
 * @param callable|null $callback Callback function used to filter output.
 *
 * @return string View content.
 */
public function render(?callable $callback = null): string
```

#### Examples

```php
// Render view.
echo $view->render();

// Render view and filter output.
echo $view->render(function ($output) {
    // Filter the output end return result 
    return $output;
});
```