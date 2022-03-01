---
title: toString
template: glowyphp/component
description: Convert the current array to string recursively implodes an array with optional key inclusion.
---

<h2 class="font-normal text-lg">
Convert the current array to string recursively implodes an array with optional key inclusion.
</h2>

```php
/**
 * Convert the current array to string recursively implodes an array with optional key inclusion.
 *
 * @param string  $glue         Value that glues elements together.
 * @param bool    $includeKeys  Include keys before their values.
 * @param bool    $trimAll      Trim ALL whitespace from string.
 */
public function toString(string $glue = ',', $includeKeys = false, $trimAll = true): string
```

#### Examples

```php
$arrays = Arrays::create([
                           'the_thin_red_line' => [
                               'title' => 'The Thin Red Line',
                               'directed_by' => 'Terrence Malick',
                               'produced_by' => 'Robert Michael, Geisler Grant Hill, John Roberdeau',
                               'decription' => 'Adaptation of James Jones autobiographical 1962 novel, focusing on the conflict at Guadalcanal during the second World War.'
                           ]
                       ]);

$result = $arrays->toString();

print_r($result);

$arrays2 = Arrays::create([
                           'the_thin_red_line' => [
                               'title' => 'The Thin Red Line',
                               'directed_by' => 'Terrence Malick',
                               'produced_by' => 'Robert Michael, Geisler Grant Hill, John Roberdeau',
                               'decription' => 'Adaptation of James Jones autobiographical 1962 novel, focusing on the conflict at Guadalcanal during the second World War.'
                           ]
                       ]);

$result2 = $arrays2->toString(',', false, false);

print_r($result2);
```

#### The above example will output:

```text
TheThinRedLine,TerrenceMalick,RobertMichael,GeislerGrantHill,JohnRoberdeau,AdaptationofJamesJonesautobiographical1962novel,focusingontheconflictatGuadalcanalduringthesecondWorldWar.

The Thin Red Line,Terrence Malick,Robert Michael, Geisler Grant Hill, John Roberdeau,Adaptation of James Jones autobiographical 1962 novel, focusing on the conflict at Guadalcanal during the second World War.
```
