---
title: delete
template: glowyphp/component
description: Deletes an array value using "dot notation".
---

<h2 class="font-normal text-lg">
Deletes an array value using "dot notation".
</h2>

```php
/**
 * Deletes an array value using "dot notation".
 *
 * @param  array|string $keys Keys
 *
 * @return self Returns instance of The Arrays class.
 */
public function delete($keys): self
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

$arrays->delete('movies.the-thin-red-line');
```
