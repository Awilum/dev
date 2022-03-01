---
title: toQuery
template: glowyphp/component
description: Convert the array into a query string.
---

<h2 class="font-normal text-lg">
Convert the array into a query string.
</h2>

```php
/**
 * Convert the array into a query string.
 */
public function toQuery(): string
```

#### Examples

```php
$arrays = Arrays::create([
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
                       ]);

$result = $arrays->toQuery();

print_r($result);
```

#### The above example will output:

```text
the_thin_red_line%5Btitle%5D=The%20Thin%20Red%20Line&the_thin_red_line%5Bdirected_by%5D=Terrence%20Malick&the_thin_red_line%5Bproduced_by%5D=Robert%20Michael%2C%20Geisler%20Grant%20Hill%2C%20John%20Roberdeau&the_thin_red_line%5Bdecription%5D=Adaptation%20of%20James%20Jones%20autobiographical%201962%20novel%2C%20focusing%20on%20the%20conflict%20at%20Guadalcanal%20during%20the%20second%20World%20War.&bad_times_at_the_el_royale%5Btitle%5D=Bad%20Times%20at%20the%20El%20Royale&bad_times_at_the_el_royale%5Bdirected_by%5D=Drew%20Goddard&bad_times_at_the_el_royale%5Bproduced_by%5D=Drew%20Goddard%2C%20Steve%20Asbell&bad_times_at_the_el_royale%5Bdecription%5D=Early%201970s.%20Four%20strangers%20check%20in%20at%20the%20El%20Royale%20Hotel.%20The%20hotel%20is%20deserted%2C%20staffed%20by%20a%20single%20desk%20clerk.%20Some%20of%20the%20new%20guests%20reasons%20for%20being%20there%20are%20less%20than%20innocent%20and%20some%20are%20not%20who%20they%20appear%20to%20be.
```
