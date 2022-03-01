---
title: move
template: glowyphp/component
description: Move substring of desired $length to $destination index of the original string.
---

```php
/**
 * Move substring of desired $length to $destination index of the original string.
 * In case $destination is less than $length returns the string untouched.
 *
 * @param int $start       Start
 * @param int $length      Length
 * @param int $destination Destination
 *
 * @return self Returns instance of The Strings class.
 */
public function move(int $start, int $length, int $destination): self
```

#### Examples

```php
$string = Strings::create('hello world')->move(0, 5, 10);

echo $string;
```

#### The above example will output:

```text
 worlhellod
```
