---
title: startsWith
template: glowyphp/component
description: Determine if a given string starts with a given substring.
---

```php
/**
 * Determine if a given string starts with a given substring.
 *
 * @param  string|string[] $needles Needles
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function startsWith($needles): bool
```

#### Examples

```php
$result = Strings::create('/movies/sg-1/season-5/episode-21/')->startsWith('/');

var_dump($result);
```

#### The above example will output:

```text
bool(true)
```
