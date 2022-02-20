---
title: Totally RAD and open-source terminal styling for PHP!
fieldset: blog-post
visibility: visible
routable: true
published_at: '16-02-2022 09:45'
created_at: '16-05-2022 09:45'
description: ''
template: blog-post
tags: thermage, php
---

Thermage is my new php open-source project for better styling of console applications.

In August 2021, I started working on a task that was on me - to create a [CLI Application for Flextype CMS](https://github.com/flextype/flextype/issues/543).

To implement the CLI Application, I took Symfony Сonsole Component.

The functionality of the Symfony Console Component is good for CLI APPs development but seemed to me extremely poor and inconvenient for styling and formatting the output.

Earlier, I was already staring at a project from [The League of Extraordinary Packages](https://thephpleague.com/) - [CLImate](https://climate.thephpleague.com/), it is much more powerful than Symfony Сonsole in terms of styling and formatting functionality, but by default, it does not work with Symfony Сonsole, and the CLImate project, frankly speaking, has been for a long time does not develop and just stands still.

I decided to make my library compatible with Symfony Сonsole applications. I called my library CLIrad - but a little later, I renamed CLIrad to Thermage.

The goal of the Thermage project is to provide rich and convenient functionality for styling and formatting any output data: plain text, html, markdown, php logs, code, etc.. in the console applications of any framework.

Thermage is a PHP alternative of such great tools: [Rich](https://github.com/Textualize/rich) library for PYTHON, [SpectreConsole](https://github.com/spectreconsole/spectre.console) library for .NET, and a [PTerm](https://github.com/pterm/pterm) library for GO.

Thermage provides a fluent and incredibly powerful, object-oriented interface for customizing CLI output text color, background, formatting, theming.

### Features

+ **Consistent colors**  
Thermage uses the ANSI color scheme which is widely used by terminals to ensure consistent colors in different terminal themes. If that’s not enough, Thermage can be used to access the full RGB color scheme (16+ million colors) in terminals that support TrueColor.

+ **Component system**  
Thermage consists of built-in components, called Elements, which can be used individually or together to generate pretty console output.

+ **Theming**  
Thermage provides ability to create and use custom themes to change the style of command line output with preconfigured themes variables.

+ **Shortcodes**  
Thermage provides incredible simple and powerful Shortcodes API to create and use shortcodes markup for customizing CLI output text color, background, formatting.

+ **Framework agnostic**  
Thermage can be used with any Modern PHP Framework: Symfony, Laravel, Yii, CakePHP, CodeIgniter, Phalcon and others.

+ **Well-crafted documentation**  
Thermage comes with a solid documentation and with a lot of examples.

### Basic usage  

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

Let's create a simple div element using Thermage Fluent API, an element with the message "Stay RAD!" and styles: padding vertical 2, text color green, background purple, text-align center and text bold.
```php
<?php 

use function Thermage\render;
use function Thermage\div;

require_once __DIR__ . '/vendor/autoload.php';

render (
  div('Stay RAD!')
    ->py2()
    ->colorGreen()
    ->bgPurple()
    ->textAlignCenter()
    ->bold()
);
```

Save the `app.php` file and execute it in the console.

```
$ php app.php
```

![cliapp](../project/entries/blog/totally-rad-and-open-source-terminal-styling-for-php/cliapp-1.png)

BTW you may use Thermage Magic Classes API to create the same div element; see the example below:

```php
render (
  div('Stay RAD!', 'py-2 color-green bg-purple text-align-center bold')
);
```

Thermage provides a rich library of built in [components(elements)](https://awilum.dev/projects/thermage/documentation/elements). You may use any of them to create your Console APP.

I will post more tutorials about Thermage usage for Console APPs development in PHP.

### Resources
Repository: [https://github.com/thermage/thermage](https://github.com/thermage/thermage)  
Documentation: [https://awilum.dev/projects/thermage](https://awilum.dev/projects/thermage)
