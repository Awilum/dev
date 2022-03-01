---
title: finish
template: glowyphp/component
description: Cap a string with a single instance of a given value.
---

```php
/**
 * Cap a string with a single instance of a given value.
 *
 * @param  string $cap Cap
 *
 * @return self Returns instance of The Strings class.
 */
public function finish(string $cap): self
```

#### Examples

```php
$result = Strings::create('/movies/sg-1/season-5/episode-21')->finish('/');

var_dump($result);
```

#### The above example will output:

```text
/movies/sg-1/season-5/episode-21/
```
