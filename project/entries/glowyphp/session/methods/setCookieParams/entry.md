---
title: setCookieParams
template: glowyphp/component
description: Set cookie parameters.
---

```php
/**
 * Set cookie parameters.
 *
 * @see http://php.net/manual/en/function.session-set-cookie-params.php
 *
 * @param int         $lifetime The lifetime of the cookie in seconds
 * @param string|null $path     The path where information is stored
 * @param string|null $domain   The domain of the cookie
 * @param bool        $secure   The cookie should only be sent over secure connections
 * @param bool        $httpOnly The cookie can only be accessed through the HTTP protocol
 */
public function setCookieParams(
    int $lifetime,
    ?string $path = null,
    ?string $domain = null,
    bool $secure = false,
    bool $httpOnly = false
): void
```

#### Examples

```php
$session->setCookieParams(60, '/', '', false, false);
```
