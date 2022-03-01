---
title: groupBy
template: glowyphp/component
description: Groups the array items by a given key.
---

<h2 class="font-normal text-lg">
Groups the array items by a given key.
</h2>

```php
/**
 * Groups the array items by a given key.
 *
 * @param  string $key Key
 */
public function groupBy(string $key): self
```

#### Examples

```php
$result = Arrays::create([
    [
        'id' => 1,
        'name' => 'Bruce Wayne',
        'city' => 'Gotham',
        'gender' => 'Male',
    ],
    [
        'id' => 2,
        'name' => 'Thomas Wayne',
        'city' => 'Gotham',
        'gender' => 'Male',
    ],
    [
        'id' => 3,
        'name' => 'Diana Prince',
        'city' => 'New Mexico',
        'gender' => 'Female',
    ],
    [
        'id' => 4,
        'name' => 'Speedy Gonzales',
        'city' => 'New Mexico',
        'gender' => 'Male',
    ],
])->groupBy('gender')->toArray();

print_r($result);
```

#### The above example will output:

```text
Array
(
    [Male] => Array
        (
            [0] => Array
                (
                    [id] => 1
                    [name] => Bruce Wayne
                    [city] => Gotham
                    [gender] => Male
                )

            [1] => Array
                (
                    [id] => 2
                    [name] => Thomas Wayne
                    [city] => Gotham
                    [gender] => Male
                )

            [2] => Array
                (
                    [id] => 4
                    [name] => Speedy Gonzales
                    [city] => New Mexico
                    [gender] => Male
                )

        )

    [Female] => Array
        (
            [0] => Array
                (
                    [id] => 3
                    [name] => Diana Prince
                    [city] => New Mexico
                    [gender] => Female
                )

        )

)
```
