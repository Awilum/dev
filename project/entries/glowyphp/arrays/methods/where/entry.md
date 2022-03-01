---
title: where
template: glowyphp/component
description: Filters the array items by a given condition.
---

<h2 class="font-normal text-lg">
Filters the array items by a given condition.
</h2>

```php
/**
 * Filters the array items by a given condition.
 *
 * @param string $key      Key of the array or object to used for comparison.
 * @param string $operator Operator used for comparison.
 *                         operators: in, nin, lt, <, lte,
 *                                    >, gt, gte, >=, contains, ncontains
 *                                    >=, <=, like, nlike, regexp, nregexp,
 *                                    eq, =, neq, !=, starts_with,
 *                                    ends_with, between, nbetween, older, newer
 * @param mixed  $value    Value used for comparison.
 *
 * @return self Returns instance of The Arrays class.
 */
public function where(string $key, string $operator, $value): self
```

#### Examples

```php
$result = Arrays::create([
                    0 => ['title' => 'FòôBar'],
                    1 => ['title' => 'BarFòô'],
                ])
                ->where('title', '=', 'FòôBar')
                ->toArray();
);
```

#### Operators

**Equal to**
`eq` `=`
<br><br>
Filter your array items by checking if your custom attribute (key) has a value that is equal to one of the values provided.
<br><br>
Use-cases:
Get collection that is refered to another in a 1:N relationship or if you want to get collection with a specific value in one of it's fields.
<br><br>
**Not equal to**
`neq` `<>` `!=`
<br><br>
Filter your array items by checking if your custom attribute (key) does not have a value that is equal to one of the values provided.
<br><br>
**Lower than**
`lt` `<`
<br><br>
Filter your array items by checking if your custom attribute (key) has a value that is lower than one of the values provided.
<br><br>
**Greater than**
`gt` `>`
<br><br>
Filter your array items by checking if your custom attribute (key) has a value that is greater than one of the values provided.
<br><br>
**Lower than or equal to**
`lte` `<=`
<br><br>
Filter your array items by checking if your custom attribute (key) has a value that is lower than or equal to one of the values provided.
<br><br>
**Greater than or equal to**
`gt` `>=`
<br><br>
Filter your array items by checking if your custom attribute (key) has a value that is greater than or equal to one of the values provided.
<br><br>
**Included in an array of values**
`in`
<br><br>
Filter your array items by checking if your custom array attribute (key) contains one of the values provided. As soon as one of the provided values separated with, are in the array field, the entry object will be in the response.
<br><br>
Use-cases:
Get all content array items that is refered to others in a N:N relationship or if you want to get all entries with a specific value in one of it's array fields.
<br><br>
**Isn't included in an array of values**
`nin`
<br><br>
Filter your entries by checking if your custom array attribute (key) is not contains one of the values provided.
<br><br>
Use-cases:
Get all content array items that is not refered to others in a N:N relationship or if you want to get all entries with a specific value that is not in one of it's array fields.
<br><br>
**Contains the substring**
`contains` `like`
<br><br>
Filter your array items by checking if your custom attribute (key) has a value that is "like" the value provided.
<br><br>
**Not Contains the substring**
`ncontains` `nlike`
<br><br>
Filter your array items by checking if your custom attribute (key) has a value that is "not like" the value provided.
<br><br>
**Starts with**
`starts_with`
<br><br>
Filter your array items by checking if your custom attribute (key) has a value that is "starts with" the value provided.
<br><br>
**Ends with**
`ends_with`
<br><br>
Filter your array items by checking if your custom attribute (key) has a value that is "ends with" the value provided.
<br><br>
**Older**
`older`
<br><br>
Filter your array items by checking if your custom attribute (key) is older than the value provided.
<br><br>
**Newer**
`newer`
<br><br>
Filter your array items by checking if your custom attribute (key) is newer than the value provided.
<br><br>
**Between**
`between`
<br><br>
Filter your array items by checking if your custom attribute (key) is between the value provided.
<br><br>
**Not Between**
`nbetween`
<br><br>
Filter your array items by checking if your custom attribute (key) is not between the value provided.
<br><br>
**Regexp**
`regexp`
<br><br>
Filter your array items by checking if your custom attribute (key) is match the provided regexp.
<br><br>
**Not Regexp**
`regexp` `nregexp`
<br><br>
Filter your array items by checking if your custom attribute (key) is not match the provided regexp.
