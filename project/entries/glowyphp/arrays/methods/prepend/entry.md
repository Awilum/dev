---
title: prepend
template: glowyphp/component
description: Push an item into the beginning of an array.
---

<h2 class="font-normal text-lg">
Push an item into the beginning of an array.
</h2>


```php
/**
 * Push an item into the beginning of an array.
 *
 * @param mixed $value The new item to append
 *
 * @return self Returns instance of The Arrays class.
 */
function prepend($value = null): self
```

#### Examples

```php
$arrays = Arrays::create([
                        'movies' => [
                           'the_thin_red_line' => [
                               'title' => 'The Thin Red Line',
                               'directed_by' => 'Terrence Malick',
                               'produced_by' => 'Robert Michael, Geisler Grant Hill, John Roberdeau',
                               'decription' => 'Adaptation of James Jones autobiographical 1962 novel, focusing on the conflict at Guadalcanal during the second World War.'
                           ],
                           'bad_times_at_the_el_royale' => [
                               'title' => 'Bad Times at the El Royale',
                               'directed_by' => 'Drew Goddard',
                               'produced_by' => 'Drew Goddard, Steve Asbell',
                               'decription' => 'Early 1970s. Four strangers check in at the El Royale Hotel. The hotel is deserted, staffed by a single desk clerk. Some of the new guests reasons for being there are less than innocent and some are not who they appear to be.'
                           ]
                        ]
                    ])->prepend(['tv-series']);

print_r($arrays->toArray());
```

#### The above example will output:

```text
Array
(
    [0] => Array
        (
            [0] => tv-series
        )

    [movies] => Array
        (
            [the_thin_red_line] => Array
                (
                    [title] => The Thin Red Line
                    [directed_by] => Terrence Malick
                    [produced_by] => Robert Michael, Geisler Grant Hill, John Roberdeau
                    [decription] => Adaptation of James Jones autobiographical 1962 novel, focusing on the conflict at Guadalcanal during the second World War.
                )

            [bad_times_at_the_el_royale] => Array
                (
                    [title] => Bad Times at the El Royale
                    [directed_by] => Drew Goddard
                    [produced_by] => Drew Goddard, Steve Asbell
                    [decription] => Early 1970s. Four strangers check in at the El Royale Hotel. The hotel is deserted, staffed by a single desk clerk. Some of the new guests reasons for being there are less than innocent and some are not who they appear to be.
                )

        )

)
```
