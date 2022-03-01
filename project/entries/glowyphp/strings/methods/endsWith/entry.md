---
title: endsWith
template: glowyphp/component
description: Determine if a given string ends with a given substring.
---

```php
/**
 * Determine if a given string ends with a given substring.
 *
 * @param  string|string[] $needles needles
 *
 * @return bool Returns TRUE on success or FALSE otherwise.
 */
public function endsWith($needles): bool
```

#### Examples

```php
$result = Strings::create('/movies/sg-1/season-5/episode-21/')->endsWith('/');

var_dump($result);
```

#### The above example will output:

```text
bool(true)
```
