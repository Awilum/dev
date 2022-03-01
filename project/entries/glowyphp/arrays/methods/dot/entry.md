---
title: dot
template: glowyphp/component
description: Flatten a multi-dimensional associative array with dots.
---

<h2 class="font-normal text-lg">
Flatten a multi-dimensional associative array with dots.
</h2>

```php
/**
 * Flatten a multi-dimensional associative array with dots.
 *
 * @param  string $prepend Prepend string
 *
 * @return self Returns instance of The Arrays class.
 */
public function dot(string $prepend = ''): self
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
                    ]);

$arrays->dot();

print_r($arrays->toArray());
```

#### The above example will output:

```text
Array
(
    [movies.the_thin_red_line.title] => The Thin Red Line
    [movies.the_thin_red_line.directed_by] => Terrence Malick
    [movies.the_thin_red_line.produced_by] => Robert Michael, Geisler Grant Hill, John Roberdeau
    [movies.the_thin_red_line.decription] => Adaptation of James Jones autobiographical 1962 novel, focusing on the conflict at Guadalcanal during the second World War.
    [movies.bad_times_at_the_el_royale.title] => Bad Times at the El Royale
    [movies.bad_times_at_the_el_royale.directed_by] => Drew Goddard
    [movies.bad_times_at_the_el_royale.produced_by] => Drew Goddard, Steve Asbell
    [movies.bad_times_at_the_el_royale.decription] => Early 1970s. Four strangers check in at the El Royale Hotel. The hotel is deserted, staffed by a single desk clerk. Some of the new guests reasons for being there are less than innocent and some are not who they appear to be.
)
```
