---
title: isValid
template: glowyphp/component
description: Checks whether an incoming CSRF token name and value is valid.
seo:
  title: Checks whether an incoming CSRF token name and value is valid | isValid
  description: You may Checks whether an incoming CSRF token name and value is valid with help of method isValid
---

<h2 class="font-normal text-lg">
Checks whether an incoming CSRF token name and value is valid.
</h2>

```php
/**
 * Checks whether an incoming CSRF token name and value is valid.
 *
 * @param string $name  The incoming token name.
 * @param string $value The incoming token value.
 *
 * @return bool True if valid, false if not.
 */
public function isValid(string $name, string $value): bool
```

#### Examples

```php
if (! $csrf->isValid($_POST[$csrf->getTokenName()])) {
    echo "This looks like a cross-site request forgery.";
} else {
    echo "This looks like a valid request.";
}
```
