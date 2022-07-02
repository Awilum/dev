---
title: Feed
description: Feed plugin for Flextype supports Atom 1.0, RSS and JSON feed types and allows you to generate feeds for entries.
icon:
  name: rss
  set: fontawesome|solid
category: seo
author:
  name: Sergey Romanenko
  email: awilum@msn.com
github: https://github.com/flextype-plugins/feed
documentation: https://awilum.github.io/flextype/downloads/extend/plugins/feed
template: flextype/plugin
seo:
  title: Get Feed Plugin for Open Source Hybrid Content Management System | Flextype
  description: Feed Plugin to display entries content on the website frontend for Open Source Hybrid Content Management System
  keywords: Flextype Site Plugin, Flextype CMS Site Plugin, Headless CMS Site Plugin, Download Flat File CMS Site Plugin, Download Flat File Content Management System Site Plugin, Download PHP CMS Site Plugin, Site Plugin, Plugin, Site, Content, Management, System, PHP, CMS
---

### Installation

1. Download & Install all required [dependencies](https://github.com/flextype-plugins/feed#dependencies).
2. Create new folder `project/plugins/feed`.
3. Download [Feed Plugin](https://github.com/flextype-plugins/feed/releases) and unzip plugin content to the folder `project`.

### Default settings

```yaml
# enabled: true or false to disable the plugin
enabled: true

# Feed plugin priority
priority: 100

# Feeds
feeds: []

# Settings for static feeds generation
static:

  # Feeds path (without trailing and without starting slash)
  feed_path: '_site'

  # Site url (without trailing slash)
  feed_url: ''
```

You may override the default settings in the plugin project configuration file `project/config/plugins/feed/settings.yaml`

### Generate static feeds

You may geneate a static feed with help of the following console command:  
```
./bin/flextype feed:generate
```