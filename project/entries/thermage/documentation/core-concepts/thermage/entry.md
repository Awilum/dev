---
title: Thermage
template: thermage/documentation/default   
---

### Basic Usage

#### Simple example of usage with [Vanilla PHP](https://www.php.net/)

```php 
use function Thermage\div;
use function Thermage\render;

// ... 

render(
  div('Stay RAD!')
    ->pl5()
    ->colorPink100()
    ->bgPink700()
    ->bold()
    ->italic()
);
```

#### Simple example of usage with [Symfony](https://github.com/symfony/console)

```php 
use function Thermage\div;
use function Thermage\renderToString;

// ... 

protected function execute(InputInterface $input, OutputInterface $output): int
{
  $render = renderToString(div('Stay RAD!')
                            ->pl5()
                            ->colorPink100()
                            ->bgPink700()
                            ->bold()
                            ->italic());

  $output->writeln($render);
      
  // ...
}
```

#### Simple example of usage with [Laravel](https://laravel.com/docs/8.x/artisan)

```php 
use function Thermage\div;
use function Thermage\renderToString;

// ... 

public function handle()
{
  $render = renderToString(div('Stay RAD!')
                            ->pl5()
                            ->colorPink100()
                            ->bgPink700()
                            ->bold()
                            ->italic());

  $this->output->writeln($render);
      
  // ...
}
```

#### Simple example of usage with [CakePHP](https://cakephp.org/)

```php 
use function Thermage\div;
use function Thermage\renderToSting;

// ... 

public function execute(Arguments $args, ConsoleIo $io)
{
  $render = renderToString(div('Stay RAD!')
                            ->pl5()
                            ->colorPink100()
                            ->bgPink700()
                            ->bold()
                            ->italic());
  
  $io->output($render);
      
  // ...
}
```

#### Simple example of usage with [Yii](https://www.yiiframework.com/)

```php 
use function Thermage\div;
use function Thermage\renderToSting;

// ... 

public function actionName()
{
  $render = renderToString(div('Stay RAD!')
                          ->pl5()
                          ->colorPink100()
                          ->bgPink700()
                          ->bold()
                          ->italic());
                          
  $this->stdout($render);
      
  // ...
}
```

#### Simple example of usage with [CodeIgniter](https://www.php.net/)

```php 
use function Thermage\div;
use function Thermage\renderToString;

// ... 

public function run(array $params)
{
    $render = renderToString(div('Stay RAD!')
                            ->pl5()
                            ->colorPink100()
                            ->bgPink700()
                            ->bold()
                            ->italic());

  CLI::write($render);

  // ...
}
```

### Extending

Thermage is "macroable", which allows you to add additional methods to the Thermage class at run time. For example, the code below will adds a new Message element to the Thermage class.  

#### Creating custom element 

```php
use Thermage\Thermage;
use Thermage\Base\Element;

class Message extends Element {
  public function info()
  {
    return $this->bgInfo()->px10() . PHP_EOL;
  }

  public function danger()
  {
    return $this->bgDanger()->px10() . PHP_EOL;
  }

  public function success()
  {
    return $this->bgSuccess()->px10() . PHP_EOL;
  }
}
```

#### Registering macro

```php
use Thermage\Thermage;

Thermage::macro('message', function(string $value = '', string $classes = '') {
  return (new Message(Thermage::getTheme(), Thermage::getShortcodes(), $value, $classes));
});
```

#### Usage

```php
use Thermage\Thermage;

render (
  Thermage::message('Stay RAD!')->info().
  Thermage::message('Stay RAD!')->danger().
  Thermage::message('Stay RAD!')->success()
);
```
