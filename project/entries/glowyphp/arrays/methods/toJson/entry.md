---
title: toJson
template: glowyphp/component
description: Convert the current array to JSON.
---

<h2 class="font-normal text-lg">
Convert the current array to JSON.
</h2>

```php
/**
 * Convert the current array to JSON.
 *
 * @param int $options Bitmask consisting of encode options
 * @param int $depth   Encode Depth. Set the maximum depth. Must be greater than zero.
 */
public function toJson($options = 0, int $depth = 512): string
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

$result = $arrays->toJson();

print_r($result);
```

#### The above example will output:

```json
{"the_thin_red_line":{"title":"The Thin Red Line","directed_by":"Terrence Malick","produced_by":"Robert Michael, Geisler Grant Hill, John Roberdeau","decription":"Adaptation of James Jones autobiographical 1962 novel, focusing on the conflict at Guadalcanal during the second World War."},"bad_times_at_the_el_royale":{"title":"Bad Times at the El Royale","directed_by":"Drew Goddard","produced_by":"Drew Goddard, Steve Asbell","decription":"Early 1970s. Four strangers check in at the El Royale Hotel. The hotel is deserted, staffed by a single desk clerk. Some of the new guests reasons for being there are less than innocent and some are not who they appear to be."}}
```
