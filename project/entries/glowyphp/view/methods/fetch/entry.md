---
title: fetch
template: glowyphp/component
description: Fetch view.
---

```php
/**
 * Fetch view.
 *
 * @param string        $view     View name.
 * @param array         $data     View data.
 * @param callable|null $callback Callback function used to filter output.
 *
 * @return string View content.
 */
public function fetch(string $view, array $data = [], ?callable $callback = null): string
```

#### Examples

```php
// Fetch view.
echo $view->fetch('welcome', ['name' => 'Eleven']);

// Fetch view with callback function used to filter output.
echo $view->fetch('welcome', ['name' => 'Eleven'], function ($output) {
    // Filter the output end return result 
    return $output;
});
```