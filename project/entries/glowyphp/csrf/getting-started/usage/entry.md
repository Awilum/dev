---
title: Usage
template: glowyphp/component
seo:
  title: Usage of Csrf Package for Cross Site Request Forgery protection
  description: Usage Enterprise-ready Csrf Package for Cross Site Request Forgery protection by comparing provided token with session token to ensure request validity.
---


```php
use Glowy\Csrf\Csrf;

// Start PHP session
session_start();

/**
 * Create the csrf object.
 *
 * @param string  $tokenNamePrefix  Prefix for CSRF token name.
 * @param string  $tokenValuePrefix Prefix for CSRF token value.
 * @param int     $strength         Strength.
 *
 * @throws CsrfException
 */
$csrf = new Csrf('__csrf_name',
                 '__csrf_value',
                 32);
```
