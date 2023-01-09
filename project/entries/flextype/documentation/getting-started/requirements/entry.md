---
title: Requirements
description: System and Browser requirements for Flextype
template: flextype/docs  
seo:
  title: Requirements for Modern Open Source Flat Files Flextype CMS
  description: Read the Requirements for Modern Open Source Flat Files Flextype CMS
order: 2
breadcrumbs:
  1:
    title: "Getting Started"
    link: "(getBaseUrl)/flextype/documentation/getting-started/"
on_this_page:
  0:
    title: "Web Server Requirements"
    link: "web-server-requirements"
  1:
    title: "PHP Requirements"
    link: "php-requirements"
---

You can easily run Flextype on your local computer and on any Web hosting providers. Make sure that your server meets the following requirements:

* Web Server (Apache, Nginx, LiteSpeed, Lightly, IIS, etc.)
* PHP 8.1.0 or higher.

### <a name="web-server-requirements"></a> Web Server Requirements

Flextype architecture is so elegant simple that it is can easily run on the most of available web servers.

For local development you may install one of this amazing servers:

* [XAMPP](https://www.apachefriends.org/index.html) is a completely free, easy to install Apache distribution containing MariaDB, PHP, and Perl. The XAMPP open source package has been set up to be incredibly easy to install and to use.

* [MAMP](https://www.mamp.info/en/mac/) is a free, local server environment that can be installed under macOS and Windows with just a few clicks. MAMP provides them with all the tools they need to run WordPress on their desktop PC for testing or development purposes, for example. With the help of our local DNS server NAMO, you can even easily test your projects on mobile devices. It doesn't matter if you prefer Apache or Nginx or if you want to work with PHP, Python, Perl or Ruby.

* [EasyPHP](https://www.easyphp.org) is a complete and ready-to-use PHP development environment on Windows including the web server Apache, the SQL Server MySQL and others development tools.

* [Laragon](https://laragon.org) is a fast & powerful local development environment.

* [Symfony Local Web Server](https://symfony.com/doc/current/setup/symfony_server.html) the local Symfony Web Server for local development environment.

> Make sure that your web server provides Mod Rewrite.

### <a name="php-requirements"></a> PHP Requirements

Flextype needs PHP 8.1.0 or higher and the following PHP extensions to be enabled:

- [mbstring](https://php.net/manual/book.mbstring.php) module for full UTF-8 support.
- [gd](https://php.net/manual/book.image.php) or [ImageMagick](https://php.net/manual/book.imagick.php) module for image processing.
- [json](https://php.net/manual/book.json.php) module for JSON manipulation.
- [Fileinfo](https://www.php.net/manual/book.fileinfo.php) for the creation, copying, deletion, moving, and opening of files
- [SPL](https://www.php.net/manual/book.spl.php) standard PHP Library.
- [DOM](https://www.php.net/manual/ru/class.domdocument.php) allows you to operate on XML documents through the DOM API with PHP

Although it is optional, we strongly recommend enabling the following PHP extensions: APC, APCu, XCache, Memcached, or Redis for better performance. Also, with the help of YAML PECL (native YAML processing), you can dramatically increase performance.
