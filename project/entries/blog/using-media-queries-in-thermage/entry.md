---
title: Using media queries in Thermage
fieldset: blog-post
visibility: visible
routable: true
published_at: '17-02-2022 09:45'
created_at: '17-05-2022 09:45'
description: ''
template: blog-post
tags: thermage, php
---

[Thermage 0.16.0](https://github.com/thermage/thermage/releases/tag/v0.16.0) brings media queries for terminal.  
Media queries in Thermage allow you to set specific styles for specific screen sizes.

Thermage has these predefined media queries:
```php
'media' => [
    'xs' => ['min' => 0, 'max' => 81],    // 577px
    'sm' => ['min' => 82, 'max' => 90],   // 640px
    'md' => ['min' => 91, 'max' => 108],  // 766px
    'lg' => ['min' => 109, 'max' => 145], // 1025px
    'xl' => ['min' => 146, 'max' => 181], // 1280px
],
```

Let's create a simple CLI APP with a simple styles for specific media queries.

Create `cliapp` directory for your demo project and `app.php` file.

```
$ mkdir cliapp
$ cd cliapp
$ touch app.php
```

Install Thermage with [Composer](https://getcomposer.org).  

```
$ composer require thermage/thermage
```

Open `app.php` with `nano` editor or any other you like.


```php
<?php 

use function Thermage\render;
use function Thermage\div;

require_once __DIR__ . '/vendor/autoload.php';

render (
  div('Stay RAD!', 'text-align-center p-4 bg-red sm:bg-yellow md:bg-green lg:bg-blue')
);
```

Save the `app.php` file and execute it in the console.

```
$ php app.php
```

The example above will render a `div` element with a yellow background for small screen sizes, green background for medium screen sizes, and a blue background for large screen sizes; for all others, you will see a `div` element with a red background.

Also, you may set these magic classes for specific media queries using a fluent interface.

```php
render (
  div('Stay RAD!', 'text-align-center p-4 bg-red')
    ->media('sm', 'bg-yellow')
    ->media('md', 'bg-green')
    ->media('lg', 'bg-blue')
);