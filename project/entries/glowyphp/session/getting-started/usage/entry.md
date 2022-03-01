---
title: Usage
template: glowyphp/component
---

```php
use Atomastic\Session\Session;

// Create the session object.
$session = new Session();

// Set session options.
$session->setOptions([
    'use_cookies' => 1,
    'cookie_secure' => 1,
    'use_only_cookies' => 1,
    'cookie_httponly' => 1,
    'use_strict_mode' => 1,
    'sid_bits_per_character' => 5,
    'sid_length' => 48,
    'cache_limiter' => 'nocache',
    'cookie_samesite' => 'Lax'
]);

// Start session.
$session->start();
```
