---
title: Site
description: Site plugin to display entries content on the website frontend.
icon:
  name: globe
  set: solid
category: content
author:
  name: Sergey Romanenko
  email: sergey.romanenko@flextype.org
github: https://github.com/flextype-plugins/site
documentation: https://github.com/flextype-plugins/site
template: flextype/plugin
seo:
  title: Get Site Plugin for Open Source Hybrid Content Management System | Flextype
  description: Site Plugin to display entries content on the website frontend for Open Source Hybrid Content Management System
  keywords: Flextype Site Plugin, Flextype CMS Site Plugin, Headless CMS Site Plugin, Download Flat File CMS Site Plugin, Download Flat File Content Management System Site Plugin, Download PHP CMS Site Plugin, Site Plugin, Plugin, Site, Content, Management, System, PHP, CMS
---

### Installation

1. Download & Install all required dependencies.
2. Create new folder `project/plugins/site`
3. Download Site Plugin and unzip plugin content to the folder `project/plugins/site`

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

# Settings for static site generation
static:

  # Destination for generated static site files (without trailing and without starting slash)
  site_path: '_site'

  # Site url (without trailing)
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
| entry | Current entry data. |
| uri | Current URI. |
| request | Current request data. |