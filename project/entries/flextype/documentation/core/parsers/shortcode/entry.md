---
title: SHORTCODE
description: Shortcode is a small piece of code, indicated by brackets like `[this]`, that performs a dedicated function on your site.
template: flextype/docs
seo:
  title: Shortcode | Flextype
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
        title: "tr"
        link: "shortcode-tr"
      -
        title: "uuid1"
        link: "shortcode-uuid1"
      -
        title: "uuid2"
        link: "shortcode-uuid2"
      -
        title: "uuid3"
        link: "shortcode-uuid3"
      -
        title: "uuid4"
        link: "shortcode-uuid4"
      -
        title: "getBaseUrl"
        link: "shortcode-getBaseUrl"
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

Shortcode is a small piece of code, indicated by brackets like `[raw][this][/raw]`, that performs a dedicated function on your site. You can place it just about anywhere you’d like, and it will add a specific feature to your page, post, or other content. For example, you can use shortcodes to display galleries, videos, or even playlists.

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
            <td><a href="#shortcode-entries">[raw][entries][/raw]</a></td>
            <td>fetch, field</td>
            <td>Fetch entry (or collection) or specific field.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-registry">[raw][registry][/raw]</a></td>
            <td>get</td>
            <td>Fetch specific item from registry.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-php">[raw][php][/raw]</a></td>
            <td></td>
            <td>Execute php code.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-strings">[raw][strings][/raw]</a></td>
            <td>append, prepend, after, afterLast, before, beforeLast, lower, upper, sort, wordsLimit, at, base64Decode, base64Encode, between, camel, capitalize, chars, charsFrequency, contains, containsAll, containsAny, count, crc32, countSubString, endsWith, finish, firstSegment, format, getEncoding, setEncoding, hash, increment, indexOf, indexOfLast,insert, isAlpha, isAlphanumeric, isAscii, isBase64, isBlank, isBoolean, isDigit, isEmail, isEmpty, isEqual, isFalse, isTrue, isHexadecimal, isHTML, isIP, isJson, isUpper, isLower, isMAC, isNumeric, isPrintable, isPunctuation, isUrl, isSimilar, isSerialized, kebab, lastSegment, length, limit, lines, md5, move, normalizeNewLines, normalizeSpaces, offsetExists, offsetGet, padBoth, padLeft, padRight, quotesToEntities, random, reduceSlashes, repeat, replace, replaceDashes, replaceFirst, replaceLast, replaceNonAlpha, replaceNonAlphanumeric, replacePunctuations, reverse, segment, segments, sha1, sha256, shuffle, similarity, snake, start, startsWith, stripQuotes, stripSpaces, studly, substr, trim, trimLeft, trimRight, trimSlashes, ucfirst, wordsCount, words, wordsFrequency</td>
            <td>Do strings modifications.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-getBaseUrl">[raw][getBaseUrl][/raw]</a></td>
            <td></td>
            <td>Get the application base url.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-getBasePath">[raw][getBasePath][/raw]</a></td>
            <td></td>
            <td>Get the application base path.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-getAbsoluteUrl">[raw][getAbsoluteUrl][/raw]</a></td>
            <td></td>
            <td>Get the application absolute path.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-getUriString">[raw][getUriString][/raw]</a></td>
            <td></td>
            <td>Get the uri string.</td>
        </tr>
        <tr>
            <td><a href="#shortcode-urlFor">[raw][urlFor][/raw]</a></td>
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

##### <a name="shortcode-entries-fetch"></a> `[raw][entries-fetch][/raw]`

Fetch specific entry field.

**Examples**

```
[raw][entries-fetch id="entry-id" field="field-name" default="default-value"][/raw]
```

##### <a name="shortcode-registry-get"></a> `[raw][registry-get][/raw]`

Fetch specific item from registry.

**Examples**

```
[raw][registry-get name="item-name" default="default-value"][/raw]
```

##### <a name="shortcode-getBasePath"></a> `[raw][getBasePath][/raw]`

Get the application base path.

**Examples**

```
[raw][getBaseUrl][/raw]
```

##### <a name="shortcode-getBasePath"></a> `[raw][getBasePath][/raw]`

Get the application base path.

**Examples**

```
[raw][getBaseUrl][/raw]
```

##### <a name="shortcode-getAbsoluteUrl"></a> `[raw][getAbsoluteUrl][/raw]`

Get the application absolute url.

**Examples**

```
[raw][getAbsoluteUrl][/raw]
```

##### <a name="shortcode-getUriString"></a> `[raw][getUriString][/raw]`

Get uri string.

**Examples**

```
[raw][getAbsoluteUrl][/raw]
```

##### <a name="shortcode-urlFor"></a> `[raw][urlFor][/raw]`

Get the url for a named route.

**Examples**

```
[raw][urlFor routeName="route-name" data='{"foo": "Foo"}' queryParams='{"foo": "Foo"}'][/raw]
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
            <td>Get Cache ID for shortcode</td>
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
parsers()->shortcode()->addHandler('message', function () {
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
parsers()->shortcode()->addHandler('raw', static function (ShortcodeInterface $s) {
    return $s->getContent();
});

parsers()
    ->shortcode()
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
$shortcode = 'text with [message]';

$html = parsers()->shortcode()->process($shortcode);
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
$shortcode = 'text with [message]';

$text = parsers()->shortcode()->parse($shortcode);
```

##### <a name="methods-getCacheID"></a> `getCacheID`

Get Cache ID for shortcode.

```php
/**
 * Get Cache ID for shortcode
 *
 * @param  string $input Input
 *
 * @return string Cache ID
 *
 * @access public
 */
public function getCacheID(string $input): string
```

**Examples**

```php
$shortcode = 'text with [message]';

$cache_id = parsers()->shortcode()->getCacheID($shortcode);
```
