---
title: Clean
description: Clean is a minimalist Starter Kit for a blog or personal site.
category: blog
author:
  name: Sergey Romanenko
  email: awilum@msn.com
  url: https://awilum.github.io
github: https://github.com/flextype-starter-kits/clean
documentation: https://github.com/flextype-starter-kits/clean
preview: https://raw.githubusercontent.com/flextype-starter-kits/clean/1.x/preview.png
template: flextype/starter-kit
seo:
  title: Get Site Plugin for Open Source Hybrid Content Management System | Flextype
  description: Site Plugin to display entries content on the website frontend for Open Source Hybrid Content Management System
  keywords: Flextype Site Plugin, Flextype CMS Site Plugin, Headless CMS Site Plugin, Download Flat File CMS Site Plugin, Download Flat File Content Management System Site Plugin, Download PHP CMS Site Plugin, Site Plugin, Plugin, Site, Content, Management, System, PHP, CMS
---

### Installation

1. Download & Install all required [dependencies](https://github.com/flextype-starter-kits/clean#dependencies).
2. Create new folder `project`
3. Download [Clean Starter Kit](https://github.com/flextype-starter-kits/clean/releases) and unzip plugin content to the folder `project`

### Recompile the CSS (optional)
1. Go to `project` folder in your console and run `npm install` to install node dependencies.
2. Run `npx tailwindcss -i ./assets/src/css/styles.css -o ./assets/dist/css/styles.css`

### Update vendors (optional)
1. Go to flextype root folder in your console and run `composer update`
2. Go to flextype `project/plugins/twig` folder in your console and run `composer update`
3. Go to flextype `project/plugins/site` folder in your console and run `composer update`
4. Go to flextype `project/plugins/sitemap` folder in your console and run `composer update`

