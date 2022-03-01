---
title: undot
template: glowyphp/component
description: Expands a dot notation array into a full multi-dimensional array.
---

<h2 class="font-normal text-lg">
Expands a dot notation array into a full multi-dimensional array.
</h2>

```php
/**
 * Expands a dot notation array into a full multi-dimensional array.
 *
 * @return self Returns instance of The Arrays class.
 */
public function undot(): self
```

#### Examples

```php
$arrays = Arrays::create([
                            'movies.the_thin_red_line.title' => 'The Thin Red Line'
                        ]);

$arrays->undot();

print_r($arrays->toArray());
```

#### The above example will output:

```text
Array
(
    [movies] => Array
        (
            [the_thin_red_line] => Array
                (
                    [title] => The Thin Red Line
                )

        )

)
```
