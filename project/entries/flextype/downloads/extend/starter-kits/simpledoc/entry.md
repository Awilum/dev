---
title: Simpledoc
description: Simpledoc is a minimalist Starter Kit for a documentation site.
category: documentation
author:
  name: Sergey Romanenko
  email: awilum@msn.com
  url: https://awilum.github.io
github: https://github.com/flextype-starter-kits/simpledoc
documentation: https://github.com/flextype-starter-kits/simpledoc
preview: https://raw.githubusercontent.com/flextype-starter-kits/simpledoc/1.x/preview.png
template: flextype/starter-kit
seo:
  title: Get Simpledoc Starter Kit for Modern Open Source Flat Files Flextype CMS
  description: Simpledoc is a minimalist Starter Kit for a documentation site for Modern Open Source Flat Files Flextype CMS
  keywords: Flextype Simpledoc Starter Kit, Headless CMS Simledoc Starter Kit, Download Flat File CMS Simpledoc Starter Kit, Download Flat File Content Management System Simpledoc Starter Kit, Download PHP CMS Simpledoc Starter Kit, Simpledoc Starter Kit, Starter Kit, Simpledoc, Content, Management, System, PHP, CMS
---

![](https://raw.githubusercontent.com/flextype-starter-kits/simpledoc/1.x/preview-2.png)

### Installation

1. Create new folder `project`
2. Download [Simpledoc Starter Kit](https://github.com/flextype-starter-kits/simpledoc/releases) and unzip starter kit content to the folder `project`

### Recompile the CSS (optional)
1. Go to `project` folder in your console and run `npm install` to install node dependencies.
2. Run `npx tailwindcss -i ./assets/src/css/styles.css -o ./assets/dist/css/styles.css --minify`

### Update vendors (optional)
2. Go to flextype `project/plugins/twig` folder in your console and run `composer update`
3. Go to flextype `project/plugins/site` folder in your console and run `composer update`
4. Go to flextype `project/plugins/sitemap` folder in your console and run `composer update`
