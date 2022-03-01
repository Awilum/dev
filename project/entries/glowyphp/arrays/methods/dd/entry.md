---
title: dd
template: glowyphp/component
description: Dumps the arrays items using the given function (print_r by default) and die.
---

<h2 class="font-normal text-lg">
Dumps the arrays items using the given function (print_r by default) and die.
</h2>

```php
/**
 * Dumps the arrays items using the given function (print_r by default) and die.
 *
 * @param callable $callback Function receiving the arrays items as parameter.
 *
 * @return void Return void.
 */
public function dd(?callable $callback = null): void
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
                    ])

$arrays->dd('var_dump');
```

#### The above example will output:

```text
array(1) {
  ["movies"]=>
  array(2) {
    ["the_thin_red_line"]=>
    array(4) {
      ["title"]=>
      string(17) "The Thin Red Line"
      ["directed_by"]=>
      string(15) "Terrence Malick"
      ["produced_by"]=>
      string(50) "Robert Michael, Geisler Grant Hill, John Roberdeau"
      ["decription"]=>
      string(123) "Adaptation of James Jones autobiographical 1962 novel, focusing on the conflict at Guadalcanal during the second World War."
    }
    ["bad_times_at_the_el_royale"]=>
    array(4) {
      ["title"]=>
      string(26) "Bad Times at the El Royale"
      ["directed_by"]=>
      string(12) "Drew Goddard"
      ["produced_by"]=>
      string(26) "Drew Goddard, Steve Asbell"
      ["decription"]=>
      string(225) "Early 1970s. Four strangers check in at the El Royale Hotel. The hotel is deserted, staffed by a single desk clerk. Some of the new guests reasons for being there are less than innocent and some are not who they appear to be."
    }
  }
}
```
