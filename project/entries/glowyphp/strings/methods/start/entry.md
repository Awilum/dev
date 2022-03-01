---
title: start
template: glowyphp/component
description: Begin a string with a single instance of a given value.
---

```php
/**
 * Begin a string with a single instance of a given value.
 *
 * @param  string $prefix Prefix
 *
 * @return self Returns instance of The Strings class.
 */
public function start(string $prefix): self
```

#### Examples

```php
$string = Strings::create('movies/sg-1/season-5/episode-21/')->start('/');

echo $string;
```

#### The above example will output:

```text
/movies/sg-1/season-5/episode-21/
```
