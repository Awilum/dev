---
title: Site
description: Site plugin to display entries content on the website frontend.
icon:
  name: globe
  set: fontawesome|solid  
category: content
author:
  name: Sergey Romanenko
  email: awilum@msn.com
github: https://github.com/flextype-plugins/site
documentation: https://github.com/flextype-plugins/site
template: flextype/plugin
seo:
  title: Get Site Plugin for Modern Open Source Flat Files Flextype CMS
  description: Site Plugin to display entries content on the website frontend for Modern Open Source Flat Files Flextype CMS
  keywords: Flextype Site Plugin, Flextype CMS Site Plugin, Headless CMS Site Plugin, Download Flat File CMS Site Plugin, Download Flat File Content Management System Site Plugin, Download PHP CMS Site Plugin, Site Plugin, Plugin, Site, Content, Management, System, PHP, CMS
---

### Installation

1. Download & Install all required [dependencies](https://github.com/flextype-plugins/site#dependencies).
2. Create new folder `project/plugins/site`.
3. Download [Site Plugin](https://github.com/flextype-plugins/site/releases) and unzip plugin content to the folder `project`.

### Default settings

```yaml
# enabled: true or false to disable the plugin
enabled: true

# Site plugin priority
priority: 10000

# The title of the website
title: Flextype

# The description of the website
description: Build fast, flexible, easier to manage websites with Flextype.

# The keywords of the website
keywords: flextype, php, cms, flat-file cms, flat cms, flatfile cms, html

# The robots of the website
robots: index, follow

# The name and email address of the website author
author:
  email: ''
  name: ''

# Templates
templates:
  directory: "views/templates"
  engine: view
  extension: php
  default: default

# Site static cache
cache:
  enabled: false

# Trailing slash
trailing_slash: false

# The entries settings
#
# - main:                 Main entry
# - error404.title:       Title to display on Error404 page
# - error404.description: Description to display on Error404 page
# - error404.content:     Content to display on Error404 page
# - error404.template:    Template to use on Error404 page
entries:
  main: home
  error404:
    title: Error 404
    description: We're sorry but the page you are looking for doesn't appear to exist!
    content: "<center>We're sorry but the page you are looking for doesn't appear to exist!</center>"
    template: default

# Redirects
redirects: []
  #- 
    #from: /foo
    #to: /bar
    #to_route_name: home
    #to_external: https://www.google.com
    #status: 301

# HTML Compressor and Minifier
minify:

  # HTML
  html:

    # enable HTML Compressor and Minifier
    enabled: false

    # optimize html via "HtmlDomParser()"
    optimize_via_dom_parser: false

    # remove default HTML comments (depends on "optimize_via_dom_parser(true)")
    remove_comments: false

    # sum-up extra whitespace from the Dom (depends on "optimize_via_dom_parser(true)")
    sum_up_whitespace: false

    # remove whitespace around tags (depends on "optimize_via_dom_parser(true)")
    remove_whitespace_around_tags: false

    # optimize html attributes (depends on "optimize_via_dom_parser(true)")
    optimize_attributes: false

    # remove optional "http:"-prefix from attributes (depends on "optimize_attributes(true)")
    remove_http_prefix_from_attributes: false

    # remove optional "https:"-prefix from attributes (depends on "optimize_attributes(true)")
    remove_https_prefix_from_attributes: false

    # keep "http:"- and "https:"-prefix for all external links 
    keep_http_and_https_prefix_on_external_attributes: false

    # make some links relative, by removing the domain from attributes
    make_same_domains_links_relative: false

    # remove defaults (depends on "optimize_via_dom_parser(true)" | disabled by default)
    remove_default_attributes: false

    # remove deprecated anchor-jump (depends on "optimize_attributes(true)")
    remove_deprecated_anchor_name: false

    # remove deprecated charset-attribute - the browser will use the charset from the HTTP-Header, anyway (depends on "optimize_attributes(true)")
    remove_deprecated_script_charset_attribute: false

    # remove deprecated script-mime-types (depends on "optimize_attributes(true)")
    remove_deprecated_type_from_script_tag: false

    # remove "type=text/css" for css links (depends on "optimize_attributes(true)")
    remove_deprecated_type_from_stylesheet_link: false

    # remove "type=text/css" from all links and styles
    remove_deprecated_type_from_style_and_link_tag: false

    # remove "media="all" from all links and styles
    remove_default_media_type_from_style_and_link_tag: false

    # remove type="submit" from button tags 
    remove_default_type_from_button: false

    # remove some empty attributes (depends on "optimize_attributes(true)")
    remove_empty_attributes: false

    # remove 'value=""' from empty <input> (depends on "optimize_attributes(true)")
    remove_value_from_empty_input: false

    # sort css-class-names, for better gzip results (depends on "optimize_attributes(true)")
    sort_css_class_names: false

    # sort html-attributes, for better gzip results (depends on "optimize_attributes(true)")
    sort_html_attributes: false

    # remove more (aggressive) spaces in the dom (disabled by default)
    remove_spaces_between_tags: false

    # remove quotes e.g. class="lall" => class=lall
    remove_omitted_quotes: false

    # remove ommitted html tags e.g. <p>lall</p> => <p>lall 
    remove_omitted_html_tags: false

# Settings for static site generation
static:

  # Destination for generated static site files (without trailing and without starting slash)
  path: '_site'

  # Site url (without trailing slash)
  site_url: ''

  # Ignore lists (without trailing and without starting slash)
  ignore:
    entries: []
    assets: 
      - src
```

You may override the default settings in the plugin project configuration file `project/config/plugins/site/settings.yaml`

### Generate static site

You may geneate a static site with help of the following console command:  
```
./bin/flextype site:generate
```

### Evailable variables

Site plugin shares the following variables in your PHP, Twig, etc., templates:

| Variable | Description |
|---|---|
| - | All entry fields. |
| uri | Current URI. |
| request | Current request data. |