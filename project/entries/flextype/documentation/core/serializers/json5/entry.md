---
title: JSON5
description: JSON5 is a superset of JSON that allows for comments and trailing commas.
template: flextype/docs
seo:
  title: JSON5 for Modern Open Source Flat Files Flextype CMS
  description: Read the documentation about using JSON5 in Modern Open Source Flat Files Flextype CMS
breadcrumbs:
  -
    title: "Core Concepts"
    link: "(getBaseUrl)/flextype/documentation/core/"
  -
    title: "Serializers"
    link: "(getBaseUrl)/flextype/documentation/core/serializers/"
on_this_page:
  -
    title: "Overview"
    link: "overview"
  -
    title: "Methods"
    link: "methods"
---

### <a name="overview"></a> Overview

The JSON5 Data Interchange Format (JavaScript Object Notation) is a superset of JSON that aims to alleviate some of the limitations of JSON by expanding its syntax to include some productions from [ECMAScript 5.1](https://262.ecma-international.org/5.1/).


#### Summary of Features
The following ECMAScript 5.1 features, which are not supported in JSON, have
been extended to JSON5.

##### Objects
- Object keys may be an ECMAScript 5.1 _[IdentifierName]_.
- Objects may have a single trailing comma.

##### Arrays
- Arrays may have a single trailing comma.

##### Strings
- Strings may be single quoted.
- Strings may span multiple lines by escaping new line characters.
- Strings may include character escapes.

##### Numbers
- Numbers may be hexadecimal.
- Numbers may have a leading or trailing decimal point.
- Numbers may be [IEEE 754] positive infinity, negative infinity, and NaN.
- Numbers may begin with an explicit plus sign.

##### Comments
- Single and multi-line comments are allowed.

##### White Space
- Additional white space characters are allowed.

[IdentifierName]: https://www.ecma-international.org/ecma-262/5.1/#sec-7.6

[IEEE 754]: http://ieeexplore.ieee.org/servlet/opac?punumber=4610933

#### Short Example
```js
{
  // comments
  unquoted: 'and you can quote me on that',
  singleQuotes: 'I can use "double quotes" here',
  lineBreaks: "Look, Mom! \
No \\n's!",
  hexadecimal: 0xdecaf,
  leadingDecimalPoint: .8675309, andTrailing: 8675309.,
  positiveSign: +1,
  trailingComma: 'in objects', andIn: ['arrays',],
  "backwardsCompatible": "with JSON",
}
```

#### Specification
For a detailed explanation of the JSON5 format, please read the [official
specification](https://json5.github.io/json5-spec/).

### <a name="methods"></a> Methods

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="#method-encode">encode</a></td>
            <td>Returns the JSON5 representation of a value.</td>
        </tr>
        <tr>
            <td><a href="#method-decode">decode</a></td>
            <td>Takes a JSON5 encoded string and converts it into a PHP variable.</td>
        </tr>
    </tbody>
</table>

### Methods Details

##### <a name="encode"></a> `encode()`

Returns the NEON representation of a value

**Examples**

```php
$data = [
        'title' => 'Revelations',
        'description' => 'While still dealing with the loss of Daniel Jackson the SGC is contacted by the Asgard who require assistance dealing with Anubis, who seems to have new shield technology that can repel Asgard weapons.',
        'director' => 'Martin Wood',
        'writers' => 'Brad Wright, Jonathan Glassner',
        'stars' => 'Richard Dean Anderson, Michael Shanks, Amanda Tapping',
        'content' => 'Osiris engages in space combat with Thor over a violation of the protected planets treaty. Freyr arrives at the SGC bringing news of Thor\'s death and asking SG-1 to mount a rescue mission to retrieve an Asgard scientist from the planet in question. Upon their arrival Heimdall informs them that Thor still lives and has been taken captive by the Goa\'uld. O\'Neill and Teal\'c transport over to the mothership to rescue him from the clutches of Anubis.'
];

$data = serializers()->json5()->encode($data);
```

##### <a name="method-decode"></a> `decode`

Takes a NEON encoded string and converts it into a PHP variable.

**Examples**

```php
$json5 = '{
  title: "Meridian",
  description: "As Jackson suffers from a fatal dose of radiation, he struggles with the value of his life while his friends deal with the emotional and diplomatic repercussions.",
  director: "William Waring",
  writers: "Brad Wright, Jonathan Glassner",
  stars: "Richard Dean Anderson, Michael Shanks, Amanda Tapping",
  content: "SG-1 returns from an off-world mission to P9Y-3C3 with Daniel Jackson suffering from what is likely a fatal dose of radiation. On the planet, they dealt with the country of Kelowna and their representative Jonas Quinn. That country was at the same stage of development as the United States in the 1940s and well on their way to creating an atomic weapon using Goa\'uld technology found in an ancient temple. Daniel argued against the Kelownans developing such a weapon and is accused of attempting to sabotage the project. As members of the team sit by his deathbed, Daniel receives an unexpected offer from someone they once met off-world."}'

$data = serializers()->json5()->decode($json5);
```
