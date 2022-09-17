---
title: SHORTCODES
description: Shortcodes are a small piece of code, indicated by brackets like `(this)`, that performs a dedicated function on your site.
template: flextype/docs
seo:
  title: Shortcodes for Modern Open Source Flat Files Flextype CMS
  description: Read the documentation about using Shotcodes in Modern Open Source Flat Files Flextype CMS
breadcrumbs:
  -
    title: "Core Concepts"
    link: "[url]/flextype/documentation/core/"
  -
    title: "Parsers"
    link: "[url]/flextype/documentation/core/parsers/"
on_this_page:
  -
    title: "Shortcodes"
    link: "shortcodes"
    level2:
      -
        title: "entries"
        link: "shortcode-entries"
      -
        title: "registry"
        link: "shortcode-registry"
      -
        title: "php"
        link: "shortcode-php"
      -
        title: "eval"
        link: "shortcode-eval"
      -
        title: "strings"
        link: "shortcode-strings"
      -
        title: "textile"
        link: "shortcode-textile"
      -
        title: "markdown"
        link: "shortcode-markdown"
      -
        title: "filesystem"
        link: "shortcode-filesystem"
      -
        title: "var"
        link: "shortcode-var"
      -
        title: "field"
        link: "shortcode-field"
      -
        title: "tr"
        link: "shortcode-tr"
      -
        title: "if"
        link: "shortcode-if"
      -
        title: "when"
        link: "shortcode-when"
      -
        title: "unless"
        link: "shortcode-when"
      -
        title: "uuid"
        link: "shortcode-uuid"
      -
        title: "getBaseUrl"
        link: "shortcode-getBaseUrl"
      -
        title: "getProjectUrl"
        link: "shortcode-getProjectUrl"
      -
        title: "getBasePath"
        link: "shortcode-getBasePath"
      -
        title: "getAbsoluteUrl"
        link: "shortcode-getAbsoluteUrl"
      -
        title: "getUriString"
        link: "shortcode-getUriString"
      -
        title: "urlFor"
        link: "shortcode-urlFor"
  -
    title: "Methods"
    link: "methods"
    level2:
      -
        title: "addHandler"
        link: "methods-addHandler"
      -
        title: "addEventHandler"
        link: "methods-addEventHandler"
      -
        title: "parse"
        link: "methods-parse"
      -
        title: "process"
        link: "methods-process"
      -
        title: "getCacheID"
        link: "methods-getCacheID"
---

Shortcodes are a small piece of code, indicated by brackets like `[raw](this)[/raw]`, that performs a dedicated function on your site. You can place it just about anywhere you’d like, and it will add a specific feature to your page, post, or other content. For example, you can use shortcodes to display galleries, videos, or even playlists.

### <a name="shortcodes"></a> Shortcodes

There are several default shortcodes available.

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th width="400">Parameters</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="#shortcode-entries">entries</a></td>
            <td>fetch, id, options, field, default</td>
            <td>Fetch entry (or collection) or specific field.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-registry">registry</a></td>
            <td>get, id, default</td>
            <td>Fetch specific item from registry.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-php">php</a></td>
            <td></td>
            <td>Execute php code.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-eval">eval</a></td>
            <td></td>
            <td>Eval expression.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-calc">calc</a></td>
            <td>expressions with values</td>
            <td>Calculate values.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-strings">strings</a></td>
            <td>append, prepend, after, afterLast, before, beforeLast, lower, upper, sort, wordsLimit, at, base64Decode, base64Encode, between, camel, capitalize, chars, charsFrequency, contains, containsAll, containsAny, count, crc32, countSubString, endsWith, finish, firstSegment, format, getEncoding, setEncoding, hash, increment, indexOf, indexOfLast,insert, isAlpha, isAlphanumeric, isAscii, isBase64, isBlank, isBoolean, isDigit, isEmail, isEmpty, isEqual, isFalse, isTrue, isHexadecimal, isHTML, isIP, isJson, isUpper, isLower, isMAC, isNumeric, isPrintable, isPunctuation, isUrl, isSimilar, isSerialized, kebab, lastSegment, length, limit, lines, md5, move, normalizeNewLines, normalizeSpaces, offsetExists, offsetGet, padBoth, padLeft, padRight, quotesToEntities, random, reduceSlashes, repeat, replace, replaceDashes, replaceFirst, replaceLast, replaceNonAlpha, replaceNonAlphanumeric, replacePunctuations, reverse, segment, segments, sha1, sha256, shuffle, similarity, snake, start, startsWith, stripQuotes, stripSpaces, studly, substr, trim, trimLeft, trimRight, trimSlashes, ucfirst, wordsCount, words, wordsFrequency</td>
            <td>Do strings modifications.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-textile">textile</a></td>
            <td></td>
            <td>Parse textile text.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-markdown">markdown</a></td>
            <td></td>
            <td>Parse markdown text.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-filesystem">filesystem</a></td>
            <td>get, file</td>
            <td>Do filesystem manipulation.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-var">var</a></td>
            <td>set, get, unset, delete</td>
            <td>Access global vars.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-field">field</a></td>
            <td>set, get, unset, delete</td>
            <td>Access current entry fields.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-tr">tr</a></td>
            <td>values, locale</td>
            <td>Returns translation of a string. If no translation exists, the original string will be returned.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-if">if</a></td>
            <td>expression</td>
            <td>Adds ability to use logical if conditions.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-when">when</a></td>
            <td>expression</td>
            <td>Adds ability to use logical positive if conditions.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-unless">unless</a></td>
            <td>expression</td>
            <td>Adds ability to use logical negative if conditions.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-uuid">uuid</a></td>
            <td></td>
            <td>Generates UUID.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-getBaseUrl">getBaseUrl</a></td>
            <td></td>
            <td>Get the application base url.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-getProjectUrl">getProjectUrl</a></td>
            <td></td>
            <td>Get the application project url.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-getBasePath">getBasePath</a></td>
            <td></td>
            <td>Get the application base path.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-getAbsoluteUrl">getAbsoluteUrl</a></td>
            <td></td>
            <td>Get the application absolute path.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-getUriString">getUriString</a></td>
            <td></td>
            <td>Get the uri string.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-urlFor">urlFor</a></td>
            <td>routeName, data, queryParams</td>
            <td>Get the url for a named route.</td>
        </tr>
        <tr>
            <td colspan="3">
                You may ignore shortcodes processing by wrapping entry content in <code>raw</code> shortcode tag.
            </td>
        </tr>
    </tbody>
</table>

### Shortocodes Details

##### <a name="shortcode-entries"></a> `entries`

Fetch entry (or entries collection) or a specific field.

**Examples**

**Fetch single entry**

```md
(entries fetch id:'blog')
```

**Fetch secific field from a single entry**

```md
(entries fetch id:'blog' field:'title' default:'Blog')
```

**Fetch entries collection**

```md
(entries fetch id:'blog' options:'collection=true')
```

**Fetch entries collection with filtering options**

```md
(entries fetch id:'blog' options:'collection=true&filter[sort_by][key]=date&filter[sort_by][direction]=ASC')
```

##### <a name="shortcode-registry"></a> `registry`

Get specific item from registry.

**Examples**

```md
(registry get id:'flextype.manifest.name' default:'Flextype')
```

##### <a name="shortcode-php"></a> `php`

Execute php code.

**Examples**

```md
(php)
  echo "Hello World!";
(/php)
```

##### <a name="shortcode-eval"></a> `eval`

Eval expression.

**Examples**

```md
(eval)
  1 + 1;
(/eval)
```

##### <a name="shortcode-calc"></a> `calc`

Calculate values.

**Examples**

```md
(calc:'1+1')
```

##### <a name="shortcode-strings"></a> `strings`

Do strings manipulation.

You may use the following parameters:

append, prepend, after, afterLast, before, beforeLast, lower, upper, sort, wordsLimit, at, base64Decode, base64Encode, between, camel, capitalize, chars, charsFrequency, contains, containsAll, containsAny, count, crc32, countSubString, endsWith, finish, firstSegment, format, getEncoding, setEncoding, hash, increment, indexOf, indexOfLast,insert, isAlpha, isAlphanumeric, isAscii, isBase64, isBlank, isBoolean, isDigit, isEmail, isEmpty, isEqual, isFalse, isTrue, isHexadecimal, isHTML, isIP, isJson, isUpper, isLower, isMAC, isNumeric, isPrintable, isPunctuation, isUrl, isSimilar, isSerialized, kebab, lastSegment, length, limit, lines, md5, move, normalizeNewLines, normalizeSpaces, offsetExists, offsetGet, padBoth, padLeft, padRight, quotesToEntities, random, reduceSlashes, repeat, replace, replaceDashes, replaceFirst, replaceLast, replaceNonAlpha, replaceNonAlphanumeric, replacePunctuations, reverse, segment, segments, sha1, sha256, shuffle, similarity, snake, start, startsWith, stripQuotes, stripSpaces, studly, substr, trim, trimLeft, trimRight, trimSlashes, ucfirst, wordsCount, words, wordsFrequency.

**Examples**

```md
// foo
(strings lower)Foo(/strings)

// FOO
(strings upper)foo(/strings)

// HELLO WORLD
(strings preppend: 'Hello ' upper)World(/strings)

// ...
```

##### <a name="shortcode-textile"></a> `textile`

Parse textile text.

**Examples**

```md
(textile)
  h2. Textile
  * is a _shorthand syntax_ used to generate valid HTML
  * is *easy* to read and *easy* to write
  * can generate complex pages, including: headings, quotes, lists, tables and figures
(/textile)
```

##### <a name="shortcode-textile"></a> `markdown`

Parse markdown text.

**Examples**

```md
(markdown)
  # Markdown
  ** markdown text **
(/markdown)
```

##### <a name="shortcode-filesystem"></a> `filesystem`

Do filesystem manipulation.

**Examples**

```md
(filesystem get file:'file.txt')
```

##### <a name="shortcode-var"></a> `var`

Access to global vars.

**Examples**

```md
(var:foo)
(var get:foo)
(var set:foo value:Foo)
(var set:foo) Foo (/var)
```

##### <a name="shortcode-field"></a> `field`

Access current entry fields.

**Examples**

```md
(field:title)
(field get:foo default:Foo)
(field get:foo) Default (/field)
(field set:foo value:Foo)
(field set:foo) Foo (/field)
(field unset:foo)
(field delete:foo)
```

##### <a name="shortcode-tr"></a> `tr`

Returns translation of a string. If no translation exists, the original string will be returned.

**Examples**

```md
(tr:'translate_key')
```

##### <a name="shortcode-if"></a> `if`

Adds ability to use logical if conditions.

**Examples**

```md
(if:'100 > 20') 
  Display content here...
(/if)
```

##### <a name="shortcode-when"></a> `when`

Adds ability to use logical positive if conditions.

**Examples**

```md
(when:'100 > 20') 
  Display content here...
(/when)
```

##### <a name="shortcode-unless"></a> `unless`

Adds ability to use logical negative if conditions.

**Examples**

```md
(unless:'100 < 20') 
  Display content here...
(/unless)
```

##### <a name="shortcode-uuid"></a> `uuid`

Generates UUID.

**Examples**

```md
(uuid)
(uuid:4)
```

##### <a name="shortcode-getBasePath"></a> `getBasePath`

Get the application base path.

**Examples**

```
(getBaseUrl)
```

##### <a name="shortcode-getBaseUrl"></a> `getBaseUrl`

Get the application base path.

**Examples**

```
(getBaseUrl)
```

##### <a name="shortcode-getProjectUrl"></a> `getProjectUrl`

Get the application project url.

**Examples**

```
(getProjectUrl)
```

##### <a name="shortcode-getAbsoluteUrl"></a> `getAbsoluteUrl`

Get the application absolute url.

**Examples**

```
(getAbsoluteUrl)
```

##### <a name="shortcode-getUriString"></a> `getUriString`

Get uri string.

**Examples**

```
(getAbsoluteUrl)
```

##### <a name="shortcode-urlFor"></a> `urlFor`

Get the url for a named route.

**Examples**

```
(urlFor routeName: 'route-name' data: '{"foo": "Foo"}' queryParams: '{"foo": "Foo"}')
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
            <td><a href="#methods-addHandler">addHandler</a></td>
            <td>Add shortcode handler.</td>
        </tr>
        <tr>
            <td><a href="#methods-addEventHandler">addEventHandler</a></td>
            <td>Add event handler.</td>
        </tr>
        <tr>
            <td><a href="#methods-process">process</a></td>
            <td>Processes text and replaces shortcodes.</td>
        </tr>
        <tr>
            <td><a href="#methods-parse">parse</a></td>
            <td>Parses text into shortcodes.</td>
        </tr>
        <tr>
            <td><a href="#methods-getCacheID">getCacheID</a></td>
            <td>Get Cache ID for shortcode.</td>
        </tr>
    </tbody>
</table>

### Methods Details

##### <a name="methods-addHandler"></a> `addHandler`

Add shortcode handler.

```php
/**
 * Add shortcode handler.
 *
 * @param string   $name    Shortcode
 * @param callable $handler Handler
 *
 * @access public
 */
public function addHandler(string $name, callable $handler)
```

**Examples**

```php
parsers()->shortcodes()->addHandler('message', function () {
    return "Indeed. – Teal'c";
});
```

##### <a name="methods-addEventHandler"></a> `addEventHandler()`

Add event handler.

```php
/**
 * Add event handler.
 *
 * @param string   $name    Event
 * @param callable $handler Handler
 *
 * @access public
 */
public function addEventHandler(string $name, callable $handler)
```

**Examples**

```php
parsers()->shortcodes()->addHandler('raw', static function (ShortcodeInterface $s) {
    return $s->getContent();
});

parsers()
    ->shortcodes()
    ->addEventHandler(Events::FILTER_SHORTCODES,
                      new FilterRawEventHandler(['raw']));
```

More details about events: [github.com/thunderer/Shortcode#events](https://github.com/thunderer/Shortcode#events)


##### <a name="methods-process"></a> `process`

Processes text and replaces shortcodes.

```php
/**
 * Processes text and replaces shortcodes.
 *
 * @param string $input A text containing SHORTCODE
 * @param bool   $cache Cache result data or no. Default is true
 *
 * @access public
 */
public function process(string $input, bool $cache = true)
```

**Examples**

```php
$shortcode = 'text with (message)';

$html = parsers()->shortcodes()->process($shortcode);
```

##### <a name="methods-parse"></a> `parse`

Parses text into shortcodes.

```php
/**
 * Parses text into shortcodes.
 *
 * @param string $input A text containing SHORTCODE
 *
 * @access public
 */
public function parse(string $input)
```

**Examples**

```php
$shortcode = 'text with (message)';

$text = parsers()->shortcodes()->parse($shortcode);
```

##### <a name="methods-getCacheID"></a> `getCacheID`

Get Cache ID for shortcode.

```php
/**
 * Get Cache ID for shortcode.
 *
 * @param  string $input Input.
 * @param  string $string String to append to the Cache ID.
 * 
 * @return string Cache ID.
 *
 * @access public
 */
public function getCacheID(string $input, string $string = ''): string
```

**Examples**

```php
$shortcode = 'text with (message)';

$cache_id = parsers()->shortcodes()->getCacheID($shortcode);
```
