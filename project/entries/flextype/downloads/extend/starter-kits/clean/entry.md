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
  title: Get Clean Starter Kit for Modern Open Source Flat Files Flextype CMS
  description: Clean is a minimalist Starter Kit for a blog or personal site for Modern Open Source Flat Files Flextype CMS
  keywords: Flextype Clean Starter Kit, Flextype CMS Clean Starter Kit, Headless CMS Clean Starter Kit, Download Flat File CMS Clean Starter Kit, Download Flat File Content Management System Clean Starter Kit, Download PHP CMS Clean Starter Kit, Clean Starter Kit, Starter Kit, Clean, Content, Management, System, PHP, CMS
---

### Installation

1. Create new folder `project`
2. Download [Clean Starter Kit](https://github.com/flextype-starter-kits/clean/releases) and unzip starter kit content to the folder `project`

### Recompile the CSS (optional)
1. Go to `project` folder in your console and run `npm install` to install node dependencies.
2. Run `npx tailwindcss -i ./assets/src/css/styles.css -o ./assets/dist/css/styles.css --minify`

### Update vendors (optional)
2. Go to flextype `project/plugins/twig` folder in your console and run `composer update`
3. Go to flextype `project/plugins/site` folder in your console and run `composer update`
4. Go to flextype `project/plugins/sitemap` folder in your console and run `composer update`
4. Go to flextype `project/plugins/feed` folder in your console and run `composer update`

