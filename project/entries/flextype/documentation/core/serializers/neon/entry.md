---
title: NEON
description: NEON is a human-readable structured data format. In Nette, it is used for configuration files. It is also used for structured data such as settings, language translations, etc.
template: flextype/docs
seo:
  title: NEON for Modern Open Source Flat Files Flextype CMS
  description: Read the documentation about using a human-readable structured data format NEON in Modern Open Source Flat Files Flextype CMS
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
    title: "Syntax"
    link: "syntax"
  -
    title: "Methods"
    link: "methods"
---

### <a name="overview"></a> Overview

NEON is a human-readable structured data format. In Nette, it is used for configuration files. It is also used for structured data such as settings, language translations, etc.

NEON stands for Nette Object Notation. It is less complex and ungainly than XML or JSON, but provides similar capabilities. It is very similar to YAML. The main advantage is that NEON has so-called entities, thanks to which the configuration of DI services is so sexy. And allows tabs for indentation.

### Syntax

A file written in NEON usually consists of a sequence or mapping.

#### Mappings

Mapping is a set of key-value pairs, in PHP it would be called an associative array. Each pair is written as `key: value`, a space after `:` is required. The value can be anything: string, number, boolean, null, sequence, or other mapping.

```yaml
street: 742 Evergreen Terrace
city: Springfield
country: USA
```

In PHP, the same structure would be written as:

```php
[ // PHP
  'street' => '742 Evergreen Terrace',
  'city' => 'Springfield',
  'country' => 'USA',
]
```

This notation is called a block notation because all items are on a separate line and have the same indentation (none in this case). NEON also supports inline representation for mapping, which is enclosed in brackets, indentation plays no role, and the separator of each element is either a comma or a newline:

```yaml
{street: 742 Evergreen Terrace, city: Springfield, country: USA}
```

This is the same written on multiple lines (indentation does not matter):

```yaml
{
  street: 742 Evergreen Terrace
  city: Springfield, country: USA
}
```

Alternatively, `=` can be used instead of <code>: </code>, both in block and inline notation:

```yaml
{street=742 Evergreen Terrace, city=Springfield, country=USA}
```

#### Sequences

Sequences are indexed arrays in PHP. They are written as lines starting with the hyphen `-` followed by a space. Again, the value can be anything: string, number, boolean, null, sequence, or other mapping.

```yaml
- Cat
- Dog
- Goldfish
```

In PHP, the same structure would be written as:

```php
[ // PHP
  'Cat',
  'Dog',
  'Goldfish',
]
```

This notation is called a block notation because all items are on a separate line and have the same indentation (none in this case). NEON also supports inline representation for sequences, which is enclosed in brackets, indentation plays no role, and the separator of each element is either a comma or a newline:

```yaml
[Cat, Dog, Goldfish]
```

This is the same written on multiple lines (indentation does not matter):

```yaml
[
  Cat, Dog
    Goldfish
]
```

Hyphens cannot be used in an inline representation.


#### Combination

Values of mappings and sequences may be other mappings and sequences. The level of indentation plays a major role. In the following example, the hyphen used to indicate sequence items has a greater indent than the `pets` key, so the items become the value of the first line:

```yaml
pets:
  - Cat
  - Dog
cars:
  - Volvo
  - Skoda
```

In PHP, the same structure would be written as:

```yaml
[ // PHP
  'pets' => [
    'Cat',
    'Dog',
  ],
  'cars' => [
    'Volvo',
    'Skoda',
  ],
]
```

It is possible to combine block and inline notation:

```yaml
pets: [Cat, Dog]
cars: [
  Volvo,
  Skoda,
]
```

Block notation can no longer be used inside an inline notation, this does not work:

```yaml
item: [
  pets:
    - Cat     # THIS IS NOT POSSIBLE!!!
    - Dog
]
```

Because PHP uses the same structure for mapping and sequences, that is, arrays, both can be merged. The indentation is the same this time:

```yaml
- Cat
street: 742 Evergreen Terrace
- Goldfish
```

In PHP, the same structure would be written as:

```yaml
[ // PHP
  'Cat',
  'street' => '742 Evergreen Terrace',
  'Goldfish',
]
```

#### Strings

Strings in NEON can be enclosed in single or double quotes. But as you can see, they can also be without quotes.

```yaml
- A unquoted string in NEON
- 'A singled-quoted string in NEON'
- "A double-quoted string in NEON"
```

If the string contains characters that can be confused with NEON syntax (hyphens, colons, etc.), it must be enclosed in quotation marks. We recommend using single quotes because they do not use escaping. If you need to enclose a quotation mark in such a string, double it:

```yaml
'A single quote '' inside a single-quoted string'
```

Double quotes allow you to use escape sequences to write special characters using backslashes `\`. All escape sequences as in the JSON format are supported, plus `\_`, which is an non-breaking space, ie `\u00A0`.

```yaml
- "\t \n \r \f \b \" \\ \/ \_"
- "\u00A9"
```

There are other cases where you need to enclose strings in quotation marks:
- they begin or end with spaces
- look like numbers, booleans, or null
- NEON would understand them as [dates](#dates)


#### Multiline strings

A multiline string begins and ends with a triple quotation mark on separate lines. The indent of the first line is ignored for all lines:

```yaml
'''
  first line
    second line
  third line
  '''
```

In PHP we would write the same as:

```php
"first line\n\tsecond line\nthird line" // PHP
```

Escaping sequences only work for strings enclosed in double quotes instead of apostrophes:

```yaml
"""
	Copyright \u00A9
"""
```

#### Numbers

NEON understands numbers written in so-called scientific notation and also numbers in binary, octal and hexadecimal:

```yaml
- 12         # an integer
- 12.3       # a float
- +1.2e-34   # an exponential number

- 0b11010    # binary number
- 0o666      # octal number
- 0x7A       # hexa number
```

#### Nulls

Null can be expressed in NEON by using `null` or by not specifying a value. Variants with a capital first or all uppercase letters are also allowed.

```yaml
a: null
b:
```

#### Booleans

Boolean values are expressed in NEON using `true` / `false` or `yes` / `no`. Variants with a capital first or all uppercase letters are also allowed.

```yaml
[true, TRUE, True, false, yes, no]
```

#### Dates

NEON uses the following formats to express data and automatically converts them to `DateTimeImmutable` objects:

```yaml
- 2016-06-03                  # date
- 2016-06-03 19:00:00         # date & time
- 2016-06-03 19:00:00.1234    # date & microtime
- 2016-06-03 19:00:00 +0200   # date & time & timezone
- 2016-06-03 19:00:00 +02:00  # date & time & timezone
```


#### Entities

An entity is a structure that resembles a function call:

```yaml
Column(type: int, nulls: yes)
```

In PHP, it is parsed as an object [Nette\Neon\Entity](https://api.nette.org/3.0/Nette/Neon/Entity.html):

```php
// PHP
new Nette\Neon\Entity('Column', ['type' => 'int', 'nulls' => true])
```

Entities can also be chained:

```yaml
Column(type: int, nulls: yes) Field(id: 1)
```

Which is parsed in PHP as follows:

```php
// PHP
new Nette\Neon\Entity(Nette\Neon\Neon::Chain, [
	new Nette\Neon\Entity('Column', ['type' => 'int', 'nulls' => true]),
	new Nette\Neon\Entity('Field', ['id' => 1]),
])
```

Inside the parentheses, the rules for inline notation used for mapping and sequences apply, so it can be divided into several lines and it is not necessary to add commas:

```yaml
Column(
	type: int
	nulls: yes
)
```

#### Comments

Comments start with `#` and all of the following characters on the right are ignored:

```yaml
# this line will be ignored by the interpreter
street: 742 Evergreen Terrace
city: Springfield  # this is ignored too
country: USA
```

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

##### <a name="encode"></a> `encode`

Returns the JSON5 representation of a value

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

$data = serializers()->neon()->encode($data);
```

##### <a name="method-decode"></a> `decode`

Takes a JSON5 encoded string and converts it into a PHP variable.

**Examples**

```php
$neon = "
    title: Meridian
    description: As Jackson suffers from a fatal dose of radiation, he struggles with the value of his life while his friends deal with the emotional and diplomatic repercussions.
    director: William Waring
    writers: Brad Wright, Jonathan Glassner
    stars: Richard Dean Anderson, Michael Shanks, Amanda Tapping
    content: SG-1 returns from an off-world mission to P9Y-3C3 with Daniel Jackson suffering from what is likely a fatal dose of radiation. On the planet, they dealt with the country of Kelowna and their representative Jonas Quinn. That country was at the same stage of development as the United States in the 1940s and well on their way to creating an atomic weapon using Goa'uld technology found in an ancient temple. Daniel argued against the Kelownans developing such a weapon and is accused of attempting to sabotage the project. As members of the team sit by his deathbed, Daniel receives an unexpected offer from someone they once met off-world.";


$data = serializers()->neon()->decode($neon);
```
