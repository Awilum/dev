---
title: display
template: glowyphp/component
description: Displays the rendered view.
---

```php
/**
 * Displays the rendered view.
 *
 * @param callable|null $callback Callback function used to filter output.
 */
public function display(?callable $callback = null): void
```

#### Examples

```php
// Display the rendered view.
$view->display();

// Display the rendered view and filter output.
$view->display(function ($output) {
    // Filter the output end return result 
    return $output;
});
```