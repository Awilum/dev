---
title: Sitemap
description: Provide automatically generated XML sitemap.
icon:
  name: map-marked-alt
  set: fontawesome|solid
category: seo
author:
  name: Sergey Romanenko
  email: awilum@msn.com
github: https://github.com/flextype-plugins/sitemap
documentation: https://github.com/flextype-plugins/sitemap
template: flextype/plugin
seo:
  title: Get Sitemap Plugin for Modern Open Source Flat Files Flextype CMS
  description: Sitemap Plugin to provide automatically generated XML sitemap for Modern Open Source Flat Files Flextype CMS
  keywords: Flextype Sitemap Plugin, Flextype CMS Sitemap Plugin, Headless CMS Sitemap Plugin, Download Flat File CMS Sitemap Plugin, Download Flat File Content Management System Sitemap Plugin, Download PHP CMS Sitemap Plugin, Sitemap Plugin, Plugin, Sitemap, Content, Management, System, PHP, CMS
---

### Installation

1. Download & Install all required [dependencies](https://github.com/flextype-plugins/sitemap#dependencies).
2. Create new folder `project/plugins/sitemap`.
3. Download [Sitemap Plugin](https://github.com/flextype-plugins/sitemap/releases) and unzip plugin content to the folder `project`.

### Settings

```yaml
# enabled: true or false to disable the plugin
enabled: true

# Sitemap plugin priority
priority: 100

# Sitemap route
route: /sitemap.xml

# List of entries to ignore
ignore: []

# List of additions to add
additions: []

# Default values for entries
default:

  # How frequently the page is likely to change. 
  # This value provides general information to search engines and may not correlate exactly to how often they crawl the page. 
  # Valid values are: always, hourly, daily, weekly, monthly, yearly, never.
  changefreq: daily

  # The priority of this URL relative to other URLs on your site. 
  # Valid values range from 0.0 to 1.0. This value does not affect how your pages are compared to pages on other sites—it only lets the search engines know which pages you deem most important for the crawlers. 
  # The default priority of a page is 1.
  priority: 1.0

# Date format
date_format: Y-m-d

# Settings for static sitemap generation
static:

  # sitemap.xml path (without trailing and without starting slash)
  path: '_site'

  # Site url (without trailing slash)
  site_url: ''
```

### Generate static sitemap

You may geneate a static sitemap with help of the following console command:  
```
./bin/flextype sitemap:generate
```
