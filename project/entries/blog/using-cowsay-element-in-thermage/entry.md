---
title: Using cowsay element in Thermage
fieldset: blog-post
visibility: visible
routable: true
published_at: '18-02-2022 09:45'
created_at: '18-05-2022 09:45'
description: ''
template: blog-post
tags: thermage, php, cowsay
---

Originialy cowsay was a Perl program that generates ASCII art pictures of a cow with a message. It can also generate pictures using pre-made images of other animals, such as Tux the Penguin, the Linux mascot. Originialy it was written in Perl. There is also a related program called cowthink, with cows with thought bubbles rather than speech bubbles. Cow files for cowsay exist which are able to produce different variants of "cows", with different kinds of "eyes", and so forth. It is sometimes used on IRC, desktop screenshots, and in software documentation. It is more or less a joke within hacker culture, but has been around long enough that its use is rather widespread.

[Thermage 0.19.0](https://github.com/thermage/thermage/releases/tag/v0.19.0) brings cowsay element for the terminal to render different cowsay and cowthink messages. 

Available cowsay templates in Thermage 0.19.0:

`C3PO` `R2-D2` `USA` `ackbar` `aperture-blank` `aperture` `armadillo` `atat` `atom` `awesome-face` `banana` `bearface` `beavis.zen` `bees` `bill-the-cat` `biohazard` `bishop` `black-mesa` `bong` `box` `broken-heart` `bud-frogs` `bunny` `cake-with-candles` `cake` `cat` `cat2` `catfence` `charizardvice` `charlie` `cheese` `chessmen` `chito` `claw-arm` `clippy` `companion-cube` `cower` `cowfee` `cthulhu-mini` `cube` `daemon` `dalek-shooting` `dalek` `default` `docker-whale` `doge` `dolphin` `dragon-and-cow` `dragon` `ebi_furai` `elephant-in-snake` `elephant` `elephant2` `explosion` `eyes` `fat-banana` `fat-cow` `fence` `fire` `flaming-sheep` `fox` `ghost` `ghostbusters` `glados` `goat` `goat2` `golden-eagle` `hand` `happy-whale` `hedgehog` `hellokitty` `hippie` `hiya` `hiyoko` `homer` `hypno` `ibm` `iwashi` `jellyfish` `karl_marx` `kilroy` `king` `kiss` `kitten` `kitty` `knight` `koala` `kosh` `lamb` `lamb2` `lightbulb` `lobster` `lollerskates` `luke-koala` `mailchimp` `maze-runner` `mech-and-cow` `meow` `milk` `minotaur` `mona-lisa` `moofasa` `mooghidjirah` `moojira` `moose` `mule` `mutilated` `nyan` `octopus` `okazu` `owl` `pawn` `periodic-table` `personality-sphere` `pinball-machine` `psychiatrichelp` `psychiatrichelp2` `pterodactyl` `queen` `radio` `ren` `renge` `robot` `robotfindskitten` `roflcopter` `rook` `sachiko` `satanic` `seahorse-big` `seahorse` `sheep` `shikato` `shrug` `skeleton` `small` `smiling-octopus` `snoopy` `snoopyhouse` `snoopysleep` `spidercow` `squid` `squirrel` `stegosaurus` `stimpy` `sudowoodo` `supermilker` `surgery` `tableflip` `taxi` `telebears` `template` `threader` `threecubes` `toaster` `tortoise` `turkey` `turtle` `tux-big` `tux` `tweety-bird` `vader-koala` `vader` `weeping-angel` `whale` `wizard` `wood` `world` `www` `yasuna_01` `yasuna_02` `yasuna_03` `yasuna_03a` `yasuna_04` `yasuna_05` `yasuna_06` `yasuna_07` `yasuna_08` `yasuna_09` `yasuna_10` `yasuna_11` `yasuna_12` `yasuna_13` `yasuna_14` `yasuna_16` `yasuna_17` `yasuna_18` `yasuna_19` `yasuna_20` `ymd_udon` `zen-noh-milk`

All cowsay templates are located in the Thermage `cows` directory. 

Let's create a simple CLI APP with a cowsay element.

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
use function Thermage\cowsay;

require_once __DIR__ . '/vendor/autoload.php';

render(
    cowsay('Hello World')
      ->template('hellokitty')
      ->w20()
      ->eyes('OO')
);
```

Save the `app.php` file and execute it in the console.

```
$ php app.php
```

The example above will render a `cowsay` element using template `hellokitty`, eyes `OO` and message box width `20`(spaces).

```text
/--------------------\
| Hello World        |
\--------------------/
  \
   \
      /\_)o<
     |      \
     | O . O |
      \_____/
```

You may set any other settings for cowsay element. Let's set individual left and right eyes and change the message box to think box.

```php
<?php 

use function Thermage\render;
use function Thermage\cowsay;

require_once __DIR__ . '/vendor/autoload.php';

render(
    cowsay('Hello World')
      ->template('hellokitty')
      ->w20()
      ->think()
      ->eyeLeft('o')
      ->eyeRight('O')
);
```

Save the `app.php` file and execute it in the console.

```
$ php app.php
```

The example above will render a `cowsay` element using template `hellokitty`, eyes `oO`, message box width `20`(spaces), and with a think box.

```text
(~~~~~~~~~~~~~~~~~~~~)
( Hello World        )
(~~~~~~~~~~~~~~~~~~~~)
  \
   \
      /\_)o<
     |      \
     | o . O |
      \_____/
```