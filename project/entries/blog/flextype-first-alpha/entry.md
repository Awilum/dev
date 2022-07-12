---
title: Current status of Flextype project and first public alpha release.
fieldset: blog-post
visibility: visible
routable: true
published_at: '12-07-2022 09:45'
created_at: '12-07-2022 09:45'
description: ''
template: blog-post
tags: flextype, php
---

I have been working hard on the Flextype project all these years (4 years already), and I am ready to introduce the first Flextype public alpha release. It was a long journey from first public **0.1.0** release to the first public **alpha** release. I have spent **thousands of hours** on **development** and **testing** during all these years. My effort for Flextype Core Repository is **7000+ commits**, **38 releases**, and **1.9 million lines of code** created and modified according to the **Hit of Code** metrics.

**Hits of Code** metric was proposed by Yegor Bugayenko as an alternative to Lines-of-Code. Instead of counting the number of existing lines in a codebase, the number of modified lines is counted. That way, the metric can only grow and never shrink. This metric it gives an overview about the amount of work put into a codebase.

I started working on the Flextype public alpha release in January 2021... first I decided that it should be the next 0.9.18 release, but after a year of development, I saw that there were a lot of significant changes, and it would be better to have a new minor number for this release - 0.10.0. But after months of development, I saw that these release numbers are confusing. Finally, I should go with [Semver](https://semver.org/) and put the project on the 1.0.0 release track, without all that unlogical numbers like 0.9.18 or 0.10.0 for releases. Before the first 1.0.0 release, there will be a few alpha/beta releases with new features, fixes and other updates. This release is **Flextype 1.0.0 alpha 1** next will be **Flextype 1.0.0 alpha 2** and counting... as it [IMBA](https://imba.io/changelog) has for example. But I hope we will not have hundreds of alpha releases before the first 1.0.0 release.

**Flextype 1.0.0 alpha 1** ships a lot of cool new features like a **Extandable Console Application**; **Configurable and Extendable Entries with Macros, Directives, Shortcodes, Expressions, Fields, Events**; **New Shortcodes**; **Modern PHP Components well tested for PHP 8.1**; **Blazing Fast Cache**; **New Extendable Rest API** and lot of more. There are so many changes that I have decided to create a **[release page](http://localhost:8888/projects/awilum.dev/flextype/releases/1.0)** that will be updated every 1.0.0 alpha release.

Really important (but breaking changes) in **Flextype 1.0.0 alpha 1** are minimum PHP version PHP 8.1 (instead of PHP 7.4), Slim 4 (instead of Slim 3), PHP DI (instead of Pimple), Glowy PHP Components (instead of Atomastic), and all Symfony Components updated to the latest version 6.1.x. 

Another significant change in Flextype web project development: there is no themes anymore. Instead of themes, you focus on the project development with its plugins, routes, scripts, assets and views/templates. Starting from **Flextype 1.0.0 alpha 1**, you can develop your web project using any template engine you want without any pain; Also you may create specific project routes and bootstrap your scripts to override default Flextype behaviour and more...

Instead of sharing themes, you may share starter kits with preinstalled plugins, content, views/templates, and assets.

I have created Clean Starter Kit for Flextype and you may use it for your project or built a new Starter Kit on top of it.

<img src="https://github.com/flextype-starter-kits/clean/raw/1.x/preview.png" class="border border-slate-900 dark:border-slate-500 plate-shadow mb-10">

For the new **Flextype 1.0.0 alpha 1** release, I have updated the Flextype website and documentation. Documentation is still in development and will be updated continuously.

I have rewritten [Site](https://github.com/flextype-plugins/site), [Twig](https://github.com/flextype-plugins/twig), [Sitemap](https://github.com/flextype-plugins/sitemap) and [Feed](https://github.com/flextype-plugins/feed) plugins for this release. There are a lot of changes, and you may read their changelog files to see what was done. But I will highlight here one feature that I'm proud of it. It is a Static (Site/Sitemap/Feed) Generator. 

<img src="https://i.postimg.cc/3R48mmWP/Screenshot-2022-07-11-at-15-11-38.png" style="padding-left: 80px; padding-right: 80px;">

From now you may use Flextype as a static site generator!  

<br>

**Flextype use cases** 

<div class="flex"> 
    <div class="w-6/12 p-4 m-4 ml-0 border border-l-4 border-slate-900 font-semibold flex items-center">
        PHP Lightweight CMS/Framework for web site development.
    </div>
    <div class="w-6/12 p-4 m-4 mr-0 border border-l-4 border-slate-900 font-semibold flex items-center">
        PHP Lightweight Framework for custom CMS development.
    </div>
</div>
<div class="flex"> 
    <div class="w-6/12 p-4 m-4 ml-0 border border-l-4 border-slate-900 font-semibold flex items-center">
        PHP Headless CMS/Framework.
        </div>
    <div class="w-6/12 p-4 m-4 mr-0 border border-l-4 border-slate-900 font-semibold flex items-center">
        </svg>PHP Static Site Generator.
    </div>
</div>

<br><br>

**What about Admin Panel?**

In January 2021, I started developing a new Blueprints Plugin with a powerfull feautures to create customizable Admin Panels for the new Flextype. I have spent a lot of time and energy on its development and related plugins. But in September 2021, I needed to stop working on this part of the project due to lack of time and other life issues. My focus changed to Flextype Core Development and prepared it for the 1.0.0 release.

I can't give any estimates for Admin Panel plugin (with Blueprints and related plugins). Because of life issues and other priorties... I hope situation will changed and everything will be fine...

<br>

**Going further**

I will focus on updates for the Website and Documentation, Flextype Core and Plugins but without any estimates.  
A lot of work needs to be done, and a lot of time and energy are required... it's hard to estimate anything related to an open-source project... especially nowadays. If you benefit of my open-source work and would like to help contribute, [here are all the ways you can do it.](https://github.com/Awilum#support-me)




