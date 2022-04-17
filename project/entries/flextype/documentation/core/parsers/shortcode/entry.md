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
        title: "entries-fetch"
        link: "shortcodes-entries-fetch"
      -
        title: "registry-get"
        link: "shortcodes-registry-get"
      -
        title: "getBaseUrl"
        link: "shortcodes-getBaseUrl"
      -
        title: "getBasePath"
        link: "shortcodes-getBasePath"
      -
        title: "getAbsoluteUrl"
        link: "shortcodes-getAbsoluteUrl"
      -
        title: "getUriString"
        link: "shortcodes-getUriString"
      -
        title: "urlFor"
        link: "shortcodes-urlFor"
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
            <th>Parameters</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="#shortcodes-entries-fetch">[raw][entries-fetch][/raw]</a></td>
            <td>id, field, default</td>
            <td>Fetch specific entry field.</td>
        </tr>
        <tr>
            <td><a href="#shortcodes-registry-get">[raw][registry-get][/raw]</a></td>
            <td>name, default</td>
            <td>Fetch specific item from registry.</td>
        </tr>
        <tr>
            <td><a href="#shortcodes-getBaseUrl">[raw][getBaseUrl][/raw]</a></td>
            <td></td>
            <td>Get the application base url.</td>
        </tr>
        <tr>
            <td><a href="#shortcodes-getBasePath">[raw][getBasePath][/raw]</a></td>
            <td></td>
            <td>Get the application base path.</td>
        </tr>
        <tr>
            <td><a href="#shortcodes-getAbsoluteUrl">[raw][getAbsoluteUrl][/raw]</a></td>
            <td></td>
            <td>Get the application absolute path.</td>
        </tr>
        <tr>
            <td><a href="#shortcodes-getUriString">[raw][getUriString][/raw]</a></td>
            <td></td>
            <td>Get the uri string.</td>
        </tr>
        <tr>
            <td><a href="#shortcodes-urlFor">[raw][urlFor][/raw]</a></td>
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

##### <a name="shortcodes-entries-fetch"></a> `[raw][entries-fetch][/raw]`

Fetch specific entry field.

**Examples**

```
[raw][entries-fetch id="entry-id" field="field-name" default="default-value"][/raw]
```

##### <a name="shortcodes-registry-get"></a> `[raw][registry-get][/raw]`

Fetch specific item from registry.

**Examples**

```
[raw][registry-get name="item-name" default="default-value"][/raw]
```

##### <a name="shortcodes-getBasePath"></a> `[raw][getBasePath][/raw]`

Get the application base path.

**Examples**

```
[raw][getBaseUrl][/raw]
```

##### <a name="shortcodes-getBasePath"></a> `[raw][getBasePath][/raw]`

Get the application base path.

**Examples**

```
[raw][getBaseUrl][/raw]
```

##### <a name="shortcodes-getAbsoluteUrl"></a> `[raw][getAbsoluteUrl][/raw]`

Get the application absolute url.

**Examples**

```
[raw][getAbsoluteUrl][/raw]
```

##### <a name="shortcodes-getUriString"></a> `[raw][getUriString][/raw]`

Get uri string.

**Examples**

```
[raw][getAbsoluteUrl][/raw]
```

##### <a name="shortcodes-urlFor"></a> `[raw][urlFor][/raw]`

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
