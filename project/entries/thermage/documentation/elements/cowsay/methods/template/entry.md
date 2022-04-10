---
title: template
template: thermage/documentation/element
description: Set Cowsay element template.
seo:
  title: Set Cowsay element template. | template
  description: You may set Cowsay element template with help of method template
---

```php
/**
 * Cowsay template.
 * 
 * @param string $value Template name.
 * 
 * @return self Returns instance of the Cowsay class.
 *
 * @access public
 */
public function template(string $value): self
```

#### Examples

Simple example of usage `Spark` element.

```php
use function Thermage\cowsay;
use function Thermage\render;

// ...

render(
    cowsay("SG-1 returns from an off-world mission to P9Y-3C3 with Daniel Jackson suffering from what is likely a fatal dose of radiation.")
      ->template('elephant2')
      ->w40()
);
```

Available cowsay templates in Thermage:

`C3PO` `R2-D2` `USA` `ackbar` `aperture-blank` `aperture` `armadillo` `atat` `atom` `awesome-face` `banana` `bearface` `beavis.zen` `bees` `bill-the-cat` `biohazard` `bishop` `black-mesa` `bong` `box` `broken-heart` `bud-frogs` `bunny` `cake-with-candles` `cake` `cat` `cat2` `catfence` `charizardvice` `charlie` `cheese` `chessmen` `chito` `claw-arm` `clippy` `companion-cube` `cower` `cowfee` `cthulhu-mini` `cube` `daemon` `dalek-shooting` `dalek` `default` `docker-whale` `doge` `dolphin` `dragon-and-cow` `dragon` `ebi_furai` `elephant-in-snake` `elephant` `elephant2` `explosion` `eyes` `fat-banana` `fat-cow` `fence` `fire` `flaming-sheep` `fox` `ghost` `ghostbusters` `glados` `goat` `goat2` `golden-eagle` `hand` `happy-whale` `hedgehog` `hellokitty` `hippie` `hiya` `hiyoko` `homer` `hypno` `ibm` `iwashi` `jellyfish` `karl_marx` `kilroy` `king` `kiss` `kitten` `kitty` `knight` `koala` `kosh` `lamb` `lamb2` `lightbulb` `lobster` `lollerskates` `luke-koala` `mailchimp` `maze-runner` `mech-and-cow` `meow` `milk` `minotaur` `mona-lisa` `moofasa` `mooghidjirah` `moojira` `moose` `mule` `mutilated` `nyan` `octopus` `okazu` `owl` `pawn` `periodic-table` `personality-sphere` `pinball-machine` `psychiatrichelp` `psychiatrichelp2` `pterodactyl` `queen` `radio` `ren` `renge` `robot` `robotfindskitten` `roflcopter` `rook` `sachiko` `satanic` `seahorse-big` `seahorse` `sheep` `shikato` `shrug` `skeleton` `small` `smiling-octopus` `snoopy` `snoopyhouse` `snoopysleep` `spidercow` `squid` `squirrel` `stegosaurus` `stimpy` `sudowoodo` `supermilker` `surgery` `tableflip` `taxi` `telebears` `template` `threader` `threecubes` `toaster` `tortoise` `turkey` `turtle` `tux-big` `tux` `tweety-bird` `vader-koala` `vader` `weeping-angel` `whale` `wizard` `wood` `world` `www` `yasuna_01` `yasuna_02` `yasuna_03` `yasuna_03a` `yasuna_04` `yasuna_05` `yasuna_06` `yasuna_07` `yasuna_08` `yasuna_09` `yasuna_10` `yasuna_11` `yasuna_12` `yasuna_13` `yasuna_14` `yasuna_16` `yasuna_17` `yasuna_18` `yasuna_19` `yasuna_20` `ymd_udon` `zen-noh-milk`

All cowsay templates are located in the Thermage `cows` directory. 

