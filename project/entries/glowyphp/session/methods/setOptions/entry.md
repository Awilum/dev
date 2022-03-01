---
title: setOptions
template: glowyphp/component
description: Set session runtime configuration.
---

```php
/**
 * Set session runtime configuration.
 *
 * @see http://php.net/manual/en/session.configuration.php
 *
 * @param array $config The session options.
 */
public function setOptions(array $options): void
```

#### Examples

```php
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
```
