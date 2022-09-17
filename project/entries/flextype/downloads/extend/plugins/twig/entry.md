---
title: Twig
description: Twig plugin to present Twig template engine for Flextype.
icon:
  name: palette
  set: fontawesome|solid
category: templating
author:
  name: Sergey Romanenko
  email: awilum@msn.com
github: https://github.com/flextype-plugins/twig
documentation: https://github.com/flextype-plugins/twig
template: flextype/plugin
seo:
  title: Get Twig Plugin for Modern Open Source Flat Files Flextype CMS
  description: Twig Plugin to present Twig template engine for Modern Open Source Flat Files Flextype CMS
  keywords: Flextype Twig Plugin, Flextype CMS Twig Plugin, Headless CMS Twig Plugin, Download Flat File CMS Twig Plugin, Download Flat File Content Management System Twig Plugin, Download PHP CMS Twig Plugin, Twig Plugin, Plugin, Twig, Content, Management, System, PHP, CMS
---

* [Dependencies](#dependencies)
* [Installation](#installation)
* [Global Variables](#global-variables)
* [Functions](#functions)
* [Filters](#filters)
* [License](#license)

### Installation

1. Download & Install all required [dependencies](https://github.com/flextype-plugins/twig#dependencies).
2. Create new folder `project/plugins/twig`.
3. Download [Twig Plugin](https://github.com/flextype-plugins/twig/releases) and unzip plugin content to the folder `project`.

### Settings

```yaml
# enabled: true or false to disable the plugin
enabled: true

# Twig
#
# - auto_reload: When developing with Twig, it's useful to recompile the template
#                whenever the source code changes. If you don't provide a value
#                for the auto_reload option, it will be determined automatically
#                based on the debug value.
#
# - debug:       When set to true, the generated templates have a __toString()
#                method that you can use to display the generated nodes
#
# - charset:     The charset used by the templates.
#
# - cache:       Set false to disable caching.
#
# - extensions   Flextype Twig Extension to load.
auto_reload: true
cache: true
debug: false
charset: "UTF-8"
entries:
  expressions:
    twig:
      enabled: true
      class: "Flextype\\Plugin\\Twig\\Expressions\\TwigExpression"
  directives:
    twig:
      enabled: true
      enabled_globally: false
      path: "project/plugins/twig/src/twig/core/Entries/Directives/TwigDirective.php"
parsers:
  shortcodes:
    shortcodes:
      twig:
        enabled: true
        path: "project/plugins/twig/src/twig/core/Parsers/Shortcodes/TwigShortcode.php"
extensions: 
  - Math
  - I18n
  - Filesystem
  - Csrf
  - Constants
  - Strings
  - Collection
  - Filters
  - Functions
  - Tests
  - Emitter
  - Actions
  - Registry
  - Entries
  - Serializers
  - Parsers
  - Flash
  - Slugify
  - Cache
  - Image
  - Url
  - Var
  - Fetch

# Twig plugin priority
priority: 0
```

You may override the default settings in the plugin project configuration file `project/config/plugins/twig/settings.yaml`

### Introduction

Twig is a modern template engine for PHP.

* **Fast**: Twig compiles templates down to plain optimized PHP code. The overhead compared to regular PHP code was reduced to the very minimum.
* **Secure**: Twig has a sandbox mode to evaluate untrusted template code. This allows Twig to be used as a template language for applications where users may modify the template design.
* **Flexible**: Twig is powered by a flexible lexer and parser. This allows the developer to define its own custom tags and filters, and create its own DSL.

Twig templates are HTML files that are sprinkled with bits of Twig code. When Twig loads a template, the first thing it will do is separate the raw HTML code from the Twig code. The raw HTML code will be output to the browser without any tampering.

All Twig code follows a basic pattern that separates it from the surrounding HTML. At its outer edges you will find left and right curly braces {{ and }}, coupled with another character that signifies what type of Twig code it is. These sets of characters are called “delimiters”.

There are three types of delimiters that Twig looks out for:

`{#` – [Comments](#comments)  
`{%` – [Tags](#tags)  
`{{` – [Print statements](#print-statements)  

### <a name="comments"></a> Comments

Twig comments are wrapped in {# and #} delimiters. You can use them to leave little notes for yourself in the code.

They are similar to HTML comments in that they won’t show up as rendered text in the browser. The difference is that they will never make it into the HTML source in the first place.

```
<!-- This will be visible in the HTML source -->
{# This won’t! #}
```

### <a name="tags"></a> Tags

Twig tags are wrapped in {% and %} delimiters, and are used to define the logic of your template, such as conditionals, loops, variable definitions, template includes, and other things.

The syntax within the {% and %} delimiters varies from tag to tag, but they will always start with the same thing: the name of the tag.

### <a name="print-statements"></a> Print Statements

To output additional HTML code dynamically, use a print statement. They are wrapped in {{ and }} delimiters, and you can put just about anything inside them, as long as it can be treated as a string.

```
<p>Hi, {{ title }}</p>
```

Don’t place a print statement (or any other Twig code) within another print statement. [See Combining Strings to learn how to combine strings with other expressions](#combining-strings).

### <a name="auto-escaping"></a> Auto-escaping

Most of the time, print statements will automatically HTML-encode the content before actually outputting it (called auto-escaping), which helps defend against cross-site scripting (XSS) vulnerabilities.

For example, let’s say you have a search results page, where the search query is defined by a q query string parameter, and in the event that there are no results, you want to output a message to the user that includes the query:

```
{% set query = request.getQueryParam().q %}

{% set entries = entries().fetch('blog', {'collection': true})
                                 .where('title', 'contains', query)
                                 .all() %}

{% if entries %}
  <h3>Search Results</h3>
  <ul>
    {% for entry in entries %}
      <li>{{ id }}</li>
    {% endfor %}
  </ul>
{% else %}
  <p>Sorry, no results for <strong>{{ query }}</strong> were found.</p>
{% endif %}
```

There are two cases where print statements will output content directly, without auto-escaping it first:

* When the content is deemed safe by the last tag or function that was called within the print statement (such as the markdown filter).
* When you explicitly mark the content as safe using a raw filter.

#### <a name="manual-escaping"></a> Manual escaping

There are times where you may need to work with both trusted and untrusted content together. For example, let’s say you want to output user-supplied content as Markdown, but you want to ensure they haven’t put anything nefarious in there first.

To do that, you could explicitly encode all HTML within the user-supplied content using the escape (opens new window) filter, before passing it to the markdown filter:

```
{# Escape any HTML in the Content field, then format as Markdown #}
{{ content|escape|markdown }}
```

### <a name="resources"></a> Resources

* [Official Twig Documentation](https://twig.sensiolabs.org/documentation)
* [Twig for Template Designers](https://twig.sensiolabs.org/doc/templates.html)
* [Twig for Developers](https://twig.sensiolabs.org/doc/api.html)
* [6 Minute Video Introduction to Twig](https://www.dev-metal.com/6min-video-introduction-twig-php-templating-engine/)
* [Introduction to Twig](https://www.slideshare.net/markstory/introduction-to-twig)

### <a name="global-variables"></a> Global Variables

The following Flextype Twig Global variables are available in Flextype Twig Templates:

| Variable | Description |
|---|---|
| _self | The current template name. |
| _context | The currently-defined variables. |
| _charset | The current charset. |

### <a name="functions"></a> Functions

The following Flextype Twig Functions are available in Flextype Twig Templates:

| Name | Description |
|---|---|
| collection | Create a new arrayable collection object from the given elements. |
| collectionFromJson | Create a new arrayable collection object from the given JSON string. |
| collectionFromString | Create a new arrayable collection object from the given string. |
| collectionWithRange | Create a new arrayable object with a range of elements. |
| collectionFromQueryString | Create a new arrayable object from the given query string. |
| filterCollection | Create a filtered collection. |
| actions | Get actions service. |
| entries | Get entries service. |
| const | Get php constant. |
| var | Get entry var. |
| field | Get entry field. |
| csrf | Get csrf hidden input. |
| filesystem | Get filesystem instance. |
| tr | Returns translation of a string. If no translation exists, the original string will be returned. No parameters are replaced. |
| __ | Returns translation of a string. If no translation exists, the original string will be returned. No parameters are replaced. |
| parsers | Get parsers service. |
| serializers | Get serializers service. |
| slugify | Get slugify service. |
| strings | Get strings instance. |
| registry | Get registry service. |
| urlFor | Get the url for a named route. |
| fullUrlFor | Get the full url for a named route. |
| isCurrentUrl | To determine is current url equal to route name. |
| getCurrentUrl | To get current path on given Uri. |
| getBasePath | To get the base path. |
| getBaseUrl | To get the base url. |
| getAbsoluteUrl | To get the absolute url. |
| getProjectUrl |	To get the project url. |
| getUriString | To get the uri string. |
| redirect | To create redirect. |

### <a name="filters"></a> Filters

The following Flextype Twig Filters are available in Flextype Twig Templates:

| Name | Description |
|---|---|
| tr | Translate string. |
| markdown | Parse markdown string. |
| shortodes | Translate string |
