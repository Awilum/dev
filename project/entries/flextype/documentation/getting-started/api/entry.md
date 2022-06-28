---
title: API Reference
template: flextype/docs   
order: 6
seo:
  title: API Reference | Flextype
breadcrumbs:
  1:
    title: "Getting Started"
    link: "[url]/flextype/documentation/getting-started/"

---
{.pt-0}
## Table of contents

- [\Flextype\Actions](#class-flextypeactions)
- [\Flextype\Plugins](#class-flextypeplugins)
- [\Flextype\Flextype](#class-flextypeflextype)
- [\Flextype\I18n](#class-flextypei18n)
- [\Flextype\Whoops](#class-flextypewhoops)
- [\Flextype\Console\FlextypeConsole](#class-flextypeconsoleflextypeconsole)
- [\Flextype\Console\Commands\AboutCommand](#class-flextypeconsolecommandsaboutcommand)
- [\Flextype\Console\Commands\Cache\CacheClearCommand](#class-flextypeconsolecommandscachecacheclearcommand)
- [\Flextype\Console\Commands\Cache\CacheClearConfigCommand](#class-flextypeconsolecommandscachecacheclearconfigcommand)
- [\Flextype\Console\Commands\Cache\CacheSetMultipleCommand](#class-flextypeconsolecommandscachecachesetmultiplecommand)
- [\Flextype\Console\Commands\Cache\CacheGetMultipleCommand](#class-flextypeconsolecommandscachecachegetmultiplecommand)
- [\Flextype\Console\Commands\Cache\CacheDeleteMultipleCommand](#class-flextypeconsolecommandscachecachedeletemultiplecommand)
- [\Flextype\Console\Commands\Cache\CacheHasCommand](#class-flextypeconsolecommandscachecachehascommand)
- [\Flextype\Console\Commands\Cache\CacheClearDataCommand](#class-flextypeconsolecommandscachecachecleardatacommand)
- [\Flextype\Console\Commands\Cache\CacheSetCommand](#class-flextypeconsolecommandscachecachesetcommand)
- [\Flextype\Console\Commands\Cache\CacheClearRoutesCommand](#class-flextypeconsolecommandscachecacheclearroutescommand)
- [\Flextype\Console\Commands\Cache\CacheDeleteCommand](#class-flextypeconsolecommandscachecachedeletecommand)
- [\Flextype\Console\Commands\Cache\CacheGetCommand](#class-flextypeconsolecommandscachecachegetcommand)
- [\Flextype\Console\Commands\Entries\EntriesMoveCommand](#class-flextypeconsolecommandsentriesentriesmovecommand)
- [\Flextype\Console\Commands\Entries\EntriesDeleteCommand](#class-flextypeconsolecommandsentriesentriesdeletecommand)
- [\Flextype\Console\Commands\Entries\EntriesCreateCommand](#class-flextypeconsolecommandsentriesentriescreatecommand)
- [\Flextype\Console\Commands\Entries\EntriesUpdateCommand](#class-flextypeconsolecommandsentriesentriesupdatecommand)
- [\Flextype\Console\Commands\Entries\EntriesHasCommand](#class-flextypeconsolecommandsentriesentrieshascommand)
- [\Flextype\Console\Commands\Entries\EntriesFetchCommand](#class-flextypeconsolecommandsentriesentriesfetchcommand)
- [\Flextype\Console\Commands\Entries\EntriesCopyCommand](#class-flextypeconsolecommandsentriesentriescopycommand)
- [\Flextype\Console\Commands\Tokens\TokensFetchCommand](#class-flextypeconsolecommandstokenstokensfetchcommand)
- [\Flextype\Console\Commands\Tokens\TokensDeleteCommand](#class-flextypeconsolecommandstokenstokensdeletecommand)
- [\Flextype\Console\Commands\Tokens\TokensCreateCommand](#class-flextypeconsolecommandstokenstokenscreatecommand)
- [\Flextype\Console\Commands\Tokens\TokensUpdateCommand](#class-flextypeconsolecommandstokenstokensupdatecommand)
- [\Flextype\Console\Commands\Tokens\TokensGenerateCommand](#class-flextypeconsolecommandstokenstokensgeneratecommand)
- [\Flextype\Console\Commands\Tokens\TokensVerifyHashCommand](#class-flextypeconsolecommandstokenstokensverifyhashcommand)
- [\Flextype\Console\Commands\Tokens\TokensHasCommand](#class-flextypeconsolecommandstokenstokenshascommand)
- [\Flextype\Console\Commands\Tokens\TokensGenerateHashCommand](#class-flextypeconsolecommandstokenstokensgeneratehashcommand)
- [\Flextype\Endpoints\Entries](#class-flextypeendpointsentries)
- [\Flextype\Endpoints\Tokens](#class-flextypeendpointstokens)
- [\Flextype\Endpoints\Cache](#class-flextypeendpointscache)
- [\Flextype\Endpoints\Registry](#class-flextypeendpointsregistry)
- [\Flextype\Endpoints\Api](#class-flextypeendpointsapi)
- [\Flextype\Entries\Entries](#class-flextypeentriesentries)
- [\Flextype\Entries\Expressions\VarExpression](#class-flextypeentriesexpressionsvarexpression)
- [\Flextype\Entries\Expressions\StringsExpression](#class-flextypeentriesexpressionsstringsexpression)
- [\Flextype\Entries\Expressions\CollectionExpression](#class-flextypeentriesexpressionscollectionexpression)
- [\Flextype\Entries\Expressions\EntriesExpression](#class-flextypeentriesexpressionsentriesexpression)
- [\Flextype\Entries\Expressions\ActionsExpression](#class-flextypeentriesexpressionsactionsexpression)
- [\Flextype\Entries\Expressions\FilesystemExpression](#class-flextypeentriesexpressionsfilesystemexpression)
- [\Flextype\Entries\Expressions\SlugifyExpression](#class-flextypeentriesexpressionsslugifyexpression)
- [\Flextype\Entries\Expressions\I18nExpression](#class-flextypeentriesexpressionsi18nexpression)
- [\Flextype\Entries\Expressions\ConstExpression](#class-flextypeentriesexpressionsconstexpression)
- [\Flextype\Entries\Expressions\FieldExpression](#class-flextypeentriesexpressionsfieldexpression)
- [\Flextype\Entries\Expressions\UrlExpression](#class-flextypeentriesexpressionsurlexpression)
- [\Flextype\Entries\Expressions\SerializersExpression](#class-flextypeentriesexpressionsserializersexpression)
- [\Flextype\Entries\Expressions\CsrfExpression](#class-flextypeentriesexpressionscsrfexpression)
- [\Flextype\Entries\Expressions\ParsersExpression](#class-flextypeentriesexpressionsparsersexpression)
- [\Flextype\Entries\Expressions\RegistryExpression](#class-flextypeentriesexpressionsregistryexpression)
- [\Flextype\Middlewares\CsrfMiddleware](#class-flextypemiddlewarescsrfmiddleware)
- [\Flextype\Middlewares\WhoopsMiddleware](#class-flextypemiddlewareswhoopsmiddleware)
- [\Flextype\Parsers\Shortcodes](#class-flextypeparsersshortcodes)
- [\Flextype\Parsers\Markdown](#class-flextypeparsersmarkdown)
- [\Flextype\Parsers\Textile](#class-flextypeparserstextile)
- [\Flextype\Parsers\Parsers](#class-flextypeparsersparsers)
- [\Flextype\Serializers\Frontmatter](#class-flextypeserializersfrontmatter)
- [\Flextype\Serializers\Json](#class-flextypeserializersjson)
- [\Flextype\Serializers\Serializers](#class-flextypeserializersserializers)
- [\Flextype\Serializers\PhpArray](#class-flextypeserializersphparray)
- [\Flextype\Serializers\Json5](#class-flextypeserializersjson5)
- [\Flextype\Serializers\Yaml](#class-flextypeserializersyaml)
- [\Flextype\Serializers\Neon](#class-flextypeserializersneon)
- [\Phpfastcache\Drivers\Phparray\Config](#class-phpfastcachedriversphparrayconfig)
- [\Phpfastcache\Drivers\Phparray\Driver](#class-phpfastcachedriversphparraydriver)
- [\Phpfastcache\Drivers\Phparray\Item](#class-phpfastcachedriversphparrayitem)

<hr /><a id="class-flextypeactions"></a>

### Class: \Flextype\Actions

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__wakeup()</strong> : <em>void</em><br /><em>Prevent from being unserialized (which would create a second instance of it)</em> |
| public static | <strong>getInstance()</strong> : <em>mixed</em><br /><em>Gets the instance via lazy initialization (created on first usage)</em> |
| protected | <strong>__clone()</strong> : <em>void</em><br /><em>Prevent the instance from being cloned (which would create a second instance of it)</em> |
| protected | <strong>__construct()</strong> : <em>void</em><br /><em>Is not allowed to call from outside to prevent from creating multiple instances, to use the Registry, you have to obtain the instance from Registry::getInstance() instead.</em> |

*This class extends \Glowy\Arrays\Arrays*

*This class implements \Traversable, \IteratorAggregate, \Countable, \ArrayAccess*

<hr /><a id="class-flextypeplugins"></a>


### Class: \Flextype\Plugins

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__call(</strong><em>\string</em> <strong>$method</strong>, <em>array</em> <strong>$parameters</strong>)</strong> : <em>mixed</em><br /><em>Dynamically handle calls to the class.</em> |
| public static | <strong>__callStatic(</strong><em>\string</em> <strong>$method</strong>, <em>array</em> <strong>$parameters</strong>)</strong> : <em>mixed</em><br /><em>Dynamically handle calls to the class.</em> |
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor</em> |
| public static | <strong>flushMacros()</strong> : <em>void</em><br /><em>Flush the existing macros.</em> |
| public | <strong>getLocales()</strong> : <em>array</em><br /><em>Get locales</em> |
| public | <strong>getPluginsCacheID(</strong><em>array</em> <strong>$pluginsList</strong>)</strong> : <em>mixed</em><br /><em>Get plugins Cache ID</em> |
| public | <strong>getPluginsDictionary(</strong><em>array</em> <strong>$pluginsList</strong>, <em>\string</em> <strong>$locale</strong>)</strong> : <em>mixed</em><br /><em>Get plugins dictionary</em> |
| public | <strong>getPluginsList()</strong> : <em>array</em><br /><em>Get plugins list</em> |
| public | <strong>getValidPluginsDependencies(</strong><em>array</em> <strong>$plugins</strong>)</strong> : <em>mixed</em><br /><em>Get valid plugins dependencies</em> |
| public static | <strong>hasMacro(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>bool</em><br /><em>Checks if macro is registered.</em> |
| public static | <strong>macro(</strong><em>\string</em> <strong>$name</strong>, <em>object/callable</em> <strong>$macro</strong>)</strong> : <em>void</em><br /><em>Register a custom macro.</em> |
| public static | <strong>mixin(</strong><em>\object</em> <strong>$mixin</strong>, <em>\bool</em> <strong>$replace=true</strong>)</strong> : <em>void</em><br /><em>Mix another object into the class.</em> |
| protected | <strong>init()</strong> : <em>void</em><br /><em>Init Plugins</em> |

<hr /><a id="class-flextypeflextype"></a>

### Class: \Flextype\Flextype

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__wakeup()</strong> : <em>void</em><br /><em>Flextype should not be restorable from strings.</em> |
| public | <strong>app()</strong> : <em>App Returns Flextype Application.</em><br /><em>Get Flextype Application.</em> |
| public | <strong>container()</strong> : <em>Container Returns Flextype Application Container.</em><br /><em>Get Flextype Application Container.</em> |
| public static | <strong>getInstance(</strong><em>\Psr\Container\ContainerInterface</em> <strong>$container=null</strong>)</strong> : <em>Flextype Returns the current Flextype Instance.</em><br /><em>Returns Flextype Instance. Gets the instance via lazy initialization (created on first usage)</em> |
| public | <strong>getVersion()</strong> : <em>string Returns the current Flextype version.</em><br /><em>Get the current Flextype version.</em> |
| protected | <strong>__clone()</strong> : <em>void</em><br /><em>Flextype should not be cloneable.</em> |
| protected | <strong>__construct(</strong><em>\Psr\Container\ContainerInterface</em> <strong>$container=null</strong>)</strong> : <em>void</em><br /><em>Flextype construct.</em> |

<hr /><a id="class-flextypei18n"></a>

### Class: \Flextype\I18n

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>add(</strong><em>string/array</em> <strong>$translates</strong>, <em>\string</em> <strong>$locale=null</strong>)</strong> : <em>void</em><br /><em>Add translation keys New translation keus for default locale I18n::add(['auth_login' => 'Login', 'auth_password' => 'Password']); New translation keys for `en_US` locale I18n::add(['auth_login' => 'Login', 'auth_password' => 'Password'], 'en_US');</em> |
| public static | <strong>find(</strong><em>\string</em> <strong>$translate</strong>, <em>array</em> <strong>$values=array()</strong>, <em>\string</em> <strong>$locale=null</strong>)</strong> : <em>string</em><br /><em>Returns translation of a string. If no translation exists, the original string will be returned. No parameters are replaced. Get translated string for `auth_login` for default locale $translated_string = I18n::find('auth_login');</em> |

<hr /><a id="class-flextypewhoops"></a>

### Class: \Flextype\Whoops

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$settings=array()</strong>)</strong> : <em>void</em><br /><em>Instance the whoops guard object</em> |
| public | <strong>install()</strong> : <em>[\Flextype\Whoops](#class-flextypewhoops)Run/null</em><br /><em>Install the whoops guard object</em> |
| public | <strong>setHandlers(</strong><em>array</em> <strong>$handlers</strong>)</strong> : <em>void</em><br /><em>Set the custom handlers for whoops</em> |
| public | <strong>setRequest(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>)</strong> : <em>void</em><br /><em>Set the server request object</em> |

<hr /><a id="class-flextypeconsoleflextypeconsole"></a>

### Class: \Flextype\Console\FlextypeConsole

| Visibility | Function |
|:-----------|:---------|
| public | <strong>run(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input=null</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output=null</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Application*

*This class implements \Symfony\Contracts\Service\ResetInterface*

<hr /><a id="class-flextypeconsolecommandsaboutcommand"></a>

### Class: \Flextype\Console\Commands\AboutCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandscachecacheclearcommand"></a>

### Class: \Flextype\Console\Commands\Cache\CacheClearCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandscachecacheclearconfigcommand"></a>

### Class: \Flextype\Console\Commands\Cache\CacheClearConfigCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandscachecachesetmultiplecommand"></a>

### Class: \Flextype\Console\Commands\Cache\CacheSetMultipleCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandscachecachegetmultiplecommand"></a>

### Class: \Flextype\Console\Commands\Cache\CacheGetMultipleCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandscachecachedeletemultiplecommand"></a>

### Class: \Flextype\Console\Commands\Cache\CacheDeleteMultipleCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandscachecachehascommand"></a>

### Class: \Flextype\Console\Commands\Cache\CacheHasCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandscachecachecleardatacommand"></a>

### Class: \Flextype\Console\Commands\Cache\CacheClearDataCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandscachecachesetcommand"></a>

### Class: \Flextype\Console\Commands\Cache\CacheSetCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandscachecacheclearroutescommand"></a>

### Class: \Flextype\Console\Commands\Cache\CacheClearRoutesCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandscachecachedeletecommand"></a>

### Class: \Flextype\Console\Commands\Cache\CacheDeleteCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandscachecachegetcommand"></a>

### Class: \Flextype\Console\Commands\Cache\CacheGetCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandsentriesentriesmovecommand"></a>

### Class: \Flextype\Console\Commands\Entries\EntriesMoveCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandsentriesentriesdeletecommand"></a>

### Class: \Flextype\Console\Commands\Entries\EntriesDeleteCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandsentriesentriescreatecommand"></a>

### Class: \Flextype\Console\Commands\Entries\EntriesCreateCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandsentriesentriesupdatecommand"></a>

### Class: \Flextype\Console\Commands\Entries\EntriesUpdateCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandsentriesentrieshascommand"></a>

### Class: \Flextype\Console\Commands\Entries\EntriesHasCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandsentriesentriesfetchcommand"></a>

### Class: \Flextype\Console\Commands\Entries\EntriesFetchCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandsentriesentriescopycommand"></a>

### Class: \Flextype\Console\Commands\Entries\EntriesCopyCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandstokenstokensfetchcommand"></a>

### Class: \Flextype\Console\Commands\Tokens\TokensFetchCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandstokenstokensdeletecommand"></a>

### Class: \Flextype\Console\Commands\Tokens\TokensDeleteCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandstokenstokenscreatecommand"></a>

### Class: \Flextype\Console\Commands\Tokens\TokensCreateCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandstokenstokensupdatecommand"></a>

### Class: \Flextype\Console\Commands\Tokens\TokensUpdateCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandstokenstokensgeneratecommand"></a>

### Class: \Flextype\Console\Commands\Tokens\TokensGenerateCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandstokenstokensverifyhashcommand"></a>

### Class: \Flextype\Console\Commands\Tokens\TokensVerifyHashCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandstokenstokenshascommand"></a>

### Class: \Flextype\Console\Commands\Tokens\TokensHasCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeconsolecommandstokenstokensgeneratehashcommand"></a>

### Class: \Flextype\Console\Commands\Tokens\TokensGenerateHashCommand

| Visibility | Function |
|:-----------|:---------|
| protected | <strong>configure()</strong> : <em>void</em> |
| protected | <strong>execute(</strong><em>\Symfony\Component\Console\Input\InputInterface</em> <strong>$input</strong>, <em>\Symfony\Component\Console\Output\OutputInterface</em> <strong>$output</strong>)</strong> : <em>void</em> |

*This class extends \Symfony\Component\Console\Command\Command*

<hr /><a id="class-flextypeendpointsentries"></a>

### Class: \Flextype\Endpoints\Entries

| Visibility | Function |
|:-----------|:---------|
| public | <strong>copy(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Copy entry.</em> |
| public | <strong>create(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Create entry.</em> |
| public | <strong>delete(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Delete entry.</em> |
| public | <strong>fetch(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Fetch entry.</em> |
| public | <strong>move(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Move entry.</em> |
| public | <strong>update(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Update entry.</em> |

*This class extends [\Flextype\Endpoints\Api](#class-flextypeendpointsapi)*

<hr /><a id="class-flextypeendpointstokens"></a>

### Class: \Flextype\Endpoints\Tokens

| Visibility | Function |
|:-----------|:---------|
| public | <strong>create(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Create token entry</em> |
| public | <strong>delete(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Delete token entry.</em> |
| public | <strong>fetch(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Fetch token entry.</em> |
| public | <strong>generate(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Generate token.</em> |
| public | <strong>generateHash(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Generate token hash</em> |
| public | <strong>update(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Update token entry.</em> |
| public | <strong>verifyHash(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Verify token hash</em> |

*This class extends [\Flextype\Endpoints\Api](#class-flextypeendpointsapi)*

<hr /><a id="class-flextypeendpointscache"></a>

### Class: \Flextype\Endpoints\Cache

| Visibility | Function |
|:-----------|:---------|
| public | <strong>clear(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Clear cache.</em> |

*This class extends [\Flextype\Endpoints\Api](#class-flextypeendpointsapi)*

<hr /><a id="class-flextypeendpointsregistry"></a>

### Class: \Flextype\Endpoints\Registry

| Visibility | Function |
|:-----------|:---------|
| public | <strong>get(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Get registry item.</em> |

*This class extends [\Flextype\Endpoints\Api](#class-flextypeendpointsapi)*

<hr /><a id="class-flextypeendpointsapi"></a>

### Class: \Flextype\Endpoints\Api

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getApiResponse(</strong><em>mixed</em> <strong>$response</strong>, <em>array</em> <strong>$body=array()</strong>, <em>\int</em> <strong>$status=200</strong>)</strong> : <em>ResponseInterface Response.</em><br /><em>Get API response.</em> |
| public | <strong>getStatusCodeMessage(</strong><em>\int</em> <strong>$status</strong>)</strong> : <em>array Message.</em><br /><em>Get Status Code Message.</em> |
| public | <strong>validateApiRequest(</strong><em>array</em> <strong>$options</strong>)</strong> : <em>void</em><br /><em>Validate Api Request.</em> |

<hr /><a id="class-flextypeentriesentries"></a>

### Class: \Flextype\Entries\Entries

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__call(</strong><em>\string</em> <strong>$method</strong>, <em>array</em> <strong>$parameters</strong>)</strong> : <em>mixed</em><br /><em>Dynamically handle calls to the class.</em> |
| public static | <strong>__callStatic(</strong><em>\string</em> <strong>$method</strong>, <em>array</em> <strong>$parameters</strong>)</strong> : <em>mixed</em><br /><em>Dynamically handle calls to the class.</em> |
| public | <strong>__construct(</strong><em>mixed</em> <strong>$options=null</strong>, <em>mixed</em> <strong>$registry=null</strong>)</strong> : <em>void</em><br /><em>Create a new entries object.</em> |
| public | <strong>copy(</strong><em>\string</em> <strong>$id</strong>, <em>\string</em> <strong>$newID</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Copy entry.</em> |
| public | <strong>create(</strong><em>\string</em> <strong>$id</strong>, <em>array</em> <strong>$data=array()</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Create entry.</em> |
| public | <strong>delete(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Delete entry.</em> |
| public | <strong>fetch(</strong><em>\string</em> <strong>$id</strong>, <em>array</em> <strong>$options=array()</strong>)</strong> : <em>mixed Returns mixed results from APIs or default is an instance of The Collection class with founded items.</em><br /><em>Fetch.</em> |
| public static | <strong>flushMacros()</strong> : <em>void</em><br /><em>Flush the existing macros.</em> |
| public | <strong>getCacheID(</strong><em>\string</em> <strong>$id</strong>, <em>\string</em> <strong>$string=`''`</strong>)</strong> : <em>string Cache ID.</em><br /><em>Get Cache ID for entry.</em> |
| public | <strong>getDirectoryLocation(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>string Entry directory location.</em><br /><em>Get entry directory location.</em> |
| public | <strong>getFileLocation(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>string Entry file location.</em><br /><em>Get entry file location.</em> |
| public | <strong>has(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Check whether entry exists.</em> |
| public static | <strong>hasMacro(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>bool</em><br /><em>Checks if macro is registered.</em> |
| public | <strong>initDirectives(</strong><em>array</em> <strong>$directives</strong>)</strong> : <em>void</em><br /><em>Init Directives</em> |
| public | <strong>initExpressions(</strong><em>array</em> <strong>$expressions</strong>)</strong> : <em>void</em><br /><em>Init Expressions</em> |
| public | <strong>initMacros(</strong><em>array</em> <strong>$macros</strong>)</strong> : <em>void</em><br /><em>Init Macros</em> |
| public static | <strong>macro(</strong><em>\string</em> <strong>$name</strong>, <em>object/callable</em> <strong>$macro</strong>)</strong> : <em>void</em><br /><em>Register a custom macro.</em> |
| public static | <strong>mixin(</strong><em>\object</em> <strong>$mixin</strong>, <em>\bool</em> <strong>$replace=true</strong>)</strong> : <em>void</em><br /><em>Mix another object into the class.</em> |
| public | <strong>move(</strong><em>\string</em> <strong>$id</strong>, <em>\string</em> <strong>$newID</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Move entry.</em> |
| public | <strong>options()</strong> : <em>array Returns entries options.</em><br /><em>Get Entries options.</em> |
| public | <strong>registry()</strong> : <em>Collection Returns entries registry.</em><br /><em>Get Entries Registry.</em> |
| public | <strong>setOptions(</strong><em>mixed</em> <strong>$options=null</strong>)</strong> : <em>void</em><br /><em>Set Entries options.</em> |
| public | <strong>setRegistry(</strong><em>mixed</em> <strong>$registry=null</strong>)</strong> : <em>void</em><br /><em>Set Entries registry.</em> |
| public | <strong>update(</strong><em>\string</em> <strong>$id</strong>, <em>array</em> <strong>$data</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Update entry.</em> |

<hr /><a id="class-flextypeentriesexpressionsvarexpression"></a>

### Class: \Flextype\Entries\Expressions\VarExpression

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFunctions()</strong> : <em>mixed</em> |

*This class implements \Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface*

<hr /><a id="class-flextypeentriesexpressionsstringsexpression"></a>

### Class: \Flextype\Entries\Expressions\StringsExpression

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFunctions()</strong> : <em>mixed</em> |

*This class implements \Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface*

<hr /><a id="class-flextypeentriesexpressionscollectionexpression"></a>

### Class: \Flextype\Entries\Expressions\CollectionExpression

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFunctions()</strong> : <em>mixed</em> |

*This class implements \Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface*

<hr /><a id="class-flextypeentriesexpressionsentriesexpression"></a>

### Class: \Flextype\Entries\Expressions\EntriesExpression

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFunctions()</strong> : <em>mixed</em> |

*This class implements \Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface*

<hr /><a id="class-flextypeentriesexpressionsactionsexpression"></a>

### Class: \Flextype\Entries\Expressions\ActionsExpression

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFunctions()</strong> : <em>mixed</em> |

*This class implements \Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface*

<hr /><a id="class-flextypeentriesexpressionsfilesystemexpression"></a>

### Class: \Flextype\Entries\Expressions\FilesystemExpression

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFunctions()</strong> : <em>mixed</em> |

*This class implements \Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface*

<hr /><a id="class-flextypeentriesexpressionsslugifyexpression"></a>

### Class: \Flextype\Entries\Expressions\SlugifyExpression

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFunctions()</strong> : <em>mixed</em> |

*This class implements \Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface*

<hr /><a id="class-flextypeentriesexpressionsi18nexpression"></a>

### Class: \Flextype\Entries\Expressions\I18nExpression

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFunctions()</strong> : <em>mixed</em> |

*This class implements \Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface*

<hr /><a id="class-flextypeentriesexpressionsconstexpression"></a>

### Class: \Flextype\Entries\Expressions\ConstExpression

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFunctions()</strong> : <em>mixed</em> |

*This class implements \Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface*

<hr /><a id="class-flextypeentriesexpressionsfieldexpression"></a>

### Class: \Flextype\Entries\Expressions\FieldExpression

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFunctions()</strong> : <em>mixed</em> |

*This class implements \Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface*

<hr /><a id="class-flextypeentriesexpressionsurlexpression"></a>

### Class: \Flextype\Entries\Expressions\UrlExpression

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFunctions()</strong> : <em>mixed</em> |

*This class implements \Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface*

<hr /><a id="class-flextypeentriesexpressionsserializersexpression"></a>

### Class: \Flextype\Entries\Expressions\SerializersExpression

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFunctions()</strong> : <em>mixed</em> |

*This class implements \Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface*

<hr /><a id="class-flextypeentriesexpressionscsrfexpression"></a>

### Class: \Flextype\Entries\Expressions\CsrfExpression

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFunctions()</strong> : <em>mixed</em> |

*This class implements \Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface*

<hr /><a id="class-flextypeentriesexpressionsparsersexpression"></a>

### Class: \Flextype\Entries\Expressions\ParsersExpression

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFunctions()</strong> : <em>mixed</em> |

*This class implements \Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface*

<hr /><a id="class-flextypeentriesexpressionsregistryexpression"></a>

### Class: \Flextype\Entries\Expressions\RegistryExpression

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFunctions()</strong> : <em>mixed</em> |

*This class implements \Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface*

<hr /><a id="class-flextypemiddlewarescsrfmiddleware"></a>

### Class: \Flextype\Middlewares\CsrfMiddleware

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>\Flextype\Middlewares\ServerRequest/\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Flextype\Middlewares\RequestHandler/\Psr\Http\Server\RequestHandlerInterface</em> <strong>$handler</strong>)</strong> : <em>\Slim\Psr7\Response</em><br /><em>Invoke</em> |

<hr /><a id="class-flextypemiddlewareswhoopsmiddleware"></a>

### Class: \Flextype\Middlewares\WhoopsMiddleware

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$settings=array()</strong>, <em>array</em> <strong>$handlers=array()</strong>)</strong> : <em>void</em><br /><em>Instance the whoops middleware object</em> |
| public | <strong>process(</strong><em>\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Psr\Http\Server\RequestHandlerInterface</em> <strong>$handler</strong>)</strong> : <em>\Psr\Http\Message\ResponseInterface</em><br /><em>Handle the requests</em> |

*This class implements \Psr\Http\Server\MiddlewareInterface*

<hr /><a id="class-flextypeparsersshortcodes"></a>

### Class: \Flextype\Parsers\Shortcodes

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__wakeup()</strong> : <em>void</em><br /><em>Shortcode should not be restorable from strings.</em> |
| public | <strong>addEventHandler(</strong><em>\string</em> <strong>$name</strong>, <em>\callable</em> <strong>$handler</strong>)</strong> : <em>void</em><br /><em>Add event handler.</em> |
| public | <strong>addHandler(</strong><em>\string</em> <strong>$name</strong>, <em>\callable</em> <strong>$handler</strong>)</strong> : <em>void</em><br /><em>Add shortcode handler.</em> |
| public | <strong>facade()</strong> : <em>void</em><br /><em>Shortcode facade.</em> |
| public | <strong>getCacheID(</strong><em>\string</em> <strong>$input</strong>, <em>\string</em> <strong>$string=`''`</strong>)</strong> : <em>string Cache ID.</em><br /><em>Get Cache ID for shortcode.</em> |
| public static | <strong>getInstance()</strong> : <em>mixed</em><br /><em>Gets the instance via lazy initialization (created on first usage).</em> |
| public | <strong>initShortcodes(</strong><em>array</em> <strong>$shortcodes</strong>)</strong> : <em>void</em><br /><em>Init Shortcodes</em> |
| public | <strong>parse(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>void</em><br /><em>Parse and processes text to replaces shortcodes.</em> |
| public | <strong>parseText(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>void</em><br /><em>Parses text into shortcodes.</em> |
| protected | <strong>__clone()</strong> : <em>void</em><br /><em>Shortcode should not be cloneable.</em> |
| protected | <strong>__construct()</strong> : <em>void</em><br /><em>Shortcode construct.</em> |

<hr /><a id="class-flextypeparsersmarkdown"></a>

### Class: \Flextype\Parsers\Markdown

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__wakeup()</strong> : <em>void</em><br /><em>Markdown should not be restorable from strings.</em> |
| public | <strong>converter()</strong> : <em>void</em><br /><em>Markdown Converter</em> |
| public | <strong>environment()</strong> : <em>void</em><br /><em>Markdown Environment</em> |
| public | <strong>getCacheID(</strong><em>\string</em> <strong>$input</strong>, <em>\string</em> <strong>$string=`''`</strong>)</strong> : <em>string Cache ID.</em><br /><em>Get Cache ID for markdown.</em> |
| public static | <strong>getInstance()</strong> : <em>mixed</em><br /><em>Gets the instance via lazy initialization (created on first usage).</em> |
| public | <strong>parse(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>mixed The MARKDOWN converted to a PHP value</em><br /><em>Takes a MARKDOWN encoded string and converts it into a PHP variable.</em> |
| protected | <strong>__clone()</strong> : <em>void</em><br /><em>Markdown should not be cloneable.</em> |
| protected | <strong>__construct()</strong> : <em>void</em><br /><em>Markdown construct</em> |

<hr /><a id="class-flextypeparserstextile"></a>

### Class: \Flextype\Parsers\Textile

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__wakeup()</strong> : <em>void</em><br /><em>Textile should not be restorable from strings.</em> |
| public | <strong>environment()</strong> : <em>void</em><br /><em>Textile Environment</em> |
| public | <strong>getCacheID(</strong><em>\string</em> <strong>$input</strong>, <em>\string</em> <strong>$string=`''`</strong>)</strong> : <em>string Cache ID.</em><br /><em>Get Cache ID for textile.</em> |
| public static | <strong>getInstance()</strong> : <em>mixed</em><br /><em>Gets the instance via lazy initialization (created on first usage).</em> |
| public | <strong>parse(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>mixed The TEXTILE converted to a PHP value</em><br /><em>Takes a TEXTILE encoded string and converts it into a PHP variable.</em> |
| protected | <strong>__clone()</strong> : <em>void</em><br /><em>Textile should not be cloneable.</em> |
| protected | <strong>__construct()</strong> : <em>void</em><br /><em>Textile construct</em> |

<hr /><a id="class-flextypeparsersparsers"></a>

### Class: \Flextype\Parsers\Parsers

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__call(</strong><em>\string</em> <strong>$method</strong>, <em>array</em> <strong>$parameters</strong>)</strong> : <em>mixed</em><br /><em>Dynamically handle calls to the class.</em> |
| public static | <strong>__callStatic(</strong><em>\string</em> <strong>$method</strong>, <em>array</em> <strong>$parameters</strong>)</strong> : <em>mixed</em><br /><em>Dynamically handle calls to the class.</em> |
| public static | <strong>flushMacros()</strong> : <em>void</em><br /><em>Flush the existing macros.</em> |
| public static | <strong>hasMacro(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>bool</em><br /><em>Checks if macro is registered.</em> |
| public static | <strong>macro(</strong><em>\string</em> <strong>$name</strong>, <em>object/callable</em> <strong>$macro</strong>)</strong> : <em>void</em><br /><em>Register a custom macro.</em> |
| public | <strong>markdown()</strong> : <em>void</em><br /><em>Create a Markdown instance.</em> |
| public static | <strong>mixin(</strong><em>\object</em> <strong>$mixin</strong>, <em>\bool</em> <strong>$replace=true</strong>)</strong> : <em>void</em><br /><em>Mix another object into the class.</em> |
| public | <strong>shortcodes()</strong> : <em>void</em><br /><em>Create a Shortcodes instance.</em> |
| public | <strong>textile()</strong> : <em>void</em><br /><em>Create a Textile instance.</em> |

<hr /><a id="class-flextypeserializersfrontmatter"></a>

### Class: \Flextype\Serializers\Frontmatter

| Visibility | Function |
|:-----------|:---------|
| public | <strong>decode(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>mixed The FRONTMATTER converted to a PHP value.</em><br /><em>Takes a FRONTMATTER encoded string and converts it into a PHP variable.</em> |
| public | <strong>encode(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>string A FRONTMATTER string representing the original PHP value.</em><br /><em>Returns the FRONTMATTER representation of a value.</em> |
| public | <strong>getCacheID(</strong><em>\string</em> <strong>$input</strong>, <em>\string</em> <strong>$string=`''`</strong>)</strong> : <em>string Cache ID.</em><br /><em>Get Cache ID for frontmatter.</em> |

<hr /><a id="class-flextypeserializersjson"></a>

### Class: \Flextype\Serializers\Json

| Visibility | Function |
|:-----------|:---------|
| public | <strong>decode(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>mixed The JSON converted to a PHP value</em><br /><em>Takes a JSON encoded string and converts it into a PHP variable.</em> |
| public | <strong>encode(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>mixed A JSON string representing the original PHP value</em><br /><em>Returns the JSON representation of a value</em> |
| public | <strong>getCacheID(</strong><em>\string</em> <strong>$input</strong>, <em>\string</em> <strong>$string=`''`</strong>)</strong> : <em>string Cache ID.</em><br /><em>Get Cache ID for JSON.</em> |

<hr /><a id="class-flextypeserializersserializers"></a>

### Class: \Flextype\Serializers\Serializers

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__call(</strong><em>\string</em> <strong>$method</strong>, <em>array</em> <strong>$parameters</strong>)</strong> : <em>mixed</em><br /><em>Dynamically handle calls to the class.</em> |
| public static | <strong>__callStatic(</strong><em>\string</em> <strong>$method</strong>, <em>array</em> <strong>$parameters</strong>)</strong> : <em>mixed</em><br /><em>Dynamically handle calls to the class.</em> |
| public static | <strong>flushMacros()</strong> : <em>void</em><br /><em>Flush the existing macros.</em> |
| public | <strong>frontmatter()</strong> : <em>void</em><br /><em>Create a Frontmatter instance.</em> |
| public static | <strong>hasMacro(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>bool</em><br /><em>Checks if macro is registered.</em> |
| public | <strong>json()</strong> : <em>void</em><br /><em>Create a Json instance.</em> |
| public | <strong>json5()</strong> : <em>void</em><br /><em>Create a Json instance.</em> |
| public static | <strong>macro(</strong><em>\string</em> <strong>$name</strong>, <em>object/callable</em> <strong>$macro</strong>)</strong> : <em>void</em><br /><em>Register a custom macro.</em> |
| public static | <strong>mixin(</strong><em>\object</em> <strong>$mixin</strong>, <em>\bool</em> <strong>$replace=true</strong>)</strong> : <em>void</em><br /><em>Mix another object into the class.</em> |
| public | <strong>neon()</strong> : <em>void</em><br /><em>Create a Neon instance.</em> |
| public | <strong>phparray()</strong> : <em>void</em><br /><em>Create a PhpArray instance.</em> |
| public | <strong>yaml()</strong> : <em>void</em><br /><em>Create a Yaml instance.</em> |

<hr /><a id="class-flextypeserializersphparray"></a>

### Class: \Flextype\Serializers\PhpArray

| Visibility | Function |
|:-----------|:---------|
| public | <strong>decode(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>mixed The PhpArray converted to a PHP value.</em><br /><em>Takes a PhpArray encoded string and converts it into a PHP variable.</em> |
| public | <strong>encode(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>string A PhpArray string representing the original PHP value.</em><br /><em>Returns the PhpArray representation of a value.</em> |
| public | <strong>getCacheID(</strong><em>\string</em> <strong>$input</strong>, <em>\string</em> <strong>$string=`''`</strong>)</strong> : <em>string Cache ID.</em><br /><em>Get Cache ID for phparray.</em> |

<hr /><a id="class-flextypeserializersjson5"></a>

### Class: \Flextype\Serializers\Json5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>decode(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>mixed The JSON5 converted to a PHP value.</em><br /><em>Takes a JSON5 encoded string and converts it into a PHP variable.</em> |
| public | <strong>encode(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>mixed A JSON5 string representing the original PHP value.</em><br /><em>Returns the JSON5 representation of a value.</em> |
| public | <strong>getCacheID(</strong><em>\string</em> <strong>$input</strong>, <em>\string</em> <strong>$string=`''`</strong>)</strong> : <em>string Cache ID.</em><br /><em>Get Cache ID for JSON5.</em> |

<hr /><a id="class-flextypeserializersyaml"></a>

### Class: \Flextype\Serializers\Yaml

| Visibility | Function |
|:-----------|:---------|
| public | <strong>decode(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>mixed The YAML converted to a PHP value.</em><br /><em>Parses YAML into a PHP value.</em> |
| public | <strong>encode(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>string A YAML string representing the original PHP value.</em><br /><em>Dumps a PHP value to a YAML string. The dump method, when supplied with an array, will do its best to convert the array into friendly YAML.</em> |
| public | <strong>getCacheID(</strong><em>\string</em> <strong>$input</strong>, <em>\string</em> <strong>$string=`''`</strong>)</strong> : <em>string Cache ID.</em><br /><em>Get Cache ID for YAML.</em> |

<hr /><a id="class-flextypeserializersneon"></a>

### Class: \Flextype\Serializers\Neon

| Visibility | Function |
|:-----------|:---------|
| public | <strong>decode(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>mixed The NEON converted to a PHP value.</em><br /><em>Takes a NEON encoded string and converts it into a PHP variable.</em> |
| public | <strong>encode(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>string A NEON string representing the original PHP value.</em><br /><em>Returns the NEON representation of a value.</em> |
| public | <strong>getCacheID(</strong><em>\string</em> <strong>$input</strong>, <em>\string</em> <strong>$string=`''`</strong>)</strong> : <em>string Cache ID.</em><br /><em>Get Cache ID for neon.</em> |

<hr /><a id="class-phpfastcachedriversphparrayconfig"></a>

### Class: \Phpfastcache\Drivers\Phparray\Config

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCacheFileExtension()</strong> : <em>string</em> |
| public | <strong>getHtaccess()</strong> : <em>bool</em> |
| public | <strong>getSecurityKey()</strong> : <em>string</em> |
| public | <strong>isSecureFileManipulation()</strong> : <em>bool</em> |
| public | <strong>setCacheFileExtension(</strong><em>\string</em> <strong>$cacheFileExtension</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\self</em> |
| public | <strong>setHtaccess(</strong><em>\bool</em> <strong>$htaccess</strong>)</strong> : <em>[\Phpfastcache\Drivers\Phparray\Config](#class-phpfastcachedriversphparrayconfig)</em> |
| public | <strong>setSecureFileManipulation(</strong><em>\bool</em> <strong>$secureFileManipulation</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\self</em> |
| public | <strong>setSecurityKey(</strong><em>\string</em> <strong>$securityKey</strong>)</strong> : <em>[\Phpfastcache\Drivers\Phparray\Config](#class-phpfastcachedriversphparrayconfig)</em> |

*This class extends \Phpfastcache\Config\ConfigurationOption*

*This class implements \Phpfastcache\Config\ConfigurationOptionInterface, \Traversable, \Countable, \Iterator, \ArrayAccess*

<hr /><a id="class-phpfastcachedriversphparraydriver"></a>

### Class: \Phpfastcache\Drivers\Phparray\Driver

> Class Driver

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Phpfastcache\Drivers\Phparray\Config](#class-phpfastcachedriversphparrayconfig)</em> <strong>$config</strong>, <em>\string</em> <strong>$instanceId</strong>)</strong> : <em>void</em><br /><em>Driver constructor.</em> |
| public | <strong>appendItemsByTag(</strong><em>\string</em> <strong>$tagName</strong>, <em>array/string</em> <strong>$data</strong>, <em>\int</em> <strong>$strategy=1</strong>)</strong> : <em>bool True if the item was successfully appended. False if there was an error.</em><br /><em>Decrement the items from the pool by tag. The tag for which to append</em> |
| public | <strong>appendItemsByTags(</strong><em>string[]</em> <strong>$tagNames</strong>, <em>array/string</em> <strong>$data</strong>, <em>\int</em> <strong>$strategy=1</strong>)</strong> : <em>bool True if the items were successfully appended. False if there was an error.</em><br /><em>Append the items from the pool by one of multiple tag names. The tag for which to append</em> |
| public | <strong>attachItem(</strong><em>\Psr\Cache\CacheItemInterface</em> <strong>$item</strong>)</strong> : <em>void</em> |
| public | <strong>clear()</strong> : <em>bool</em> |
| public | <strong>commit()</strong> : <em>bool</em> |
| public | <strong>decrementItemsByTag(</strong><em>\string</em> <strong>$tagName</strong>, <em>\int</em> <strong>$step=1</strong>, <em>\int</em> <strong>$strategy=1</strong>)</strong> : <em>bool True if the item was successfully decremented. False if there was an error.</em><br /><em>Decrement the items from the pool by tag. The tag for which to decrement</em> |
| public | <strong>decrementItemsByTags(</strong><em>string[]</em> <strong>$tagNames</strong>, <em>\int</em> <strong>$step=1</strong>, <em>\int</em> <strong>$strategy=1</strong>)</strong> : <em>bool True if the item was successfully decremented. False if there was an error.</em><br /><em>Decrement the items from the pool by one of multiple tag names. The tag for which to decrement</em> |
| public | <strong>deleteItem(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>bool</em> |
| public | <strong>deleteItems(</strong><em>array</em> <strong>$keys</strong>)</strong> : <em>bool</em> |
| public | <strong>deleteItemsByTag(</strong><em>\string</em> <strong>$tagName</strong>, <em>\int</em> <strong>$strategy=1</strong>)</strong> : <em>bool True if the item was successfully removed. False if there was an error.</em><br /><em>Removes the item from the pool by tag. The tag for which to delete</em> |
| public | <strong>deleteItemsByTags(</strong><em>string[]</em> <strong>$tagNames</strong>, <em>\int</em> <strong>$strategy=1</strong>)</strong> : <em>bool True if the items were successfully removed. False if there was an error.</em><br /><em>Removes the item from the pool by one of multiple tag names. The tag for which to delete</em> |
| public | <strong>detachAllItems()</strong> : <em>void</em> |
| public | <strong>detachItem(</strong><em>\Psr\Cache\CacheItemInterface</em> <strong>$item</strong>)</strong> : <em>void</em> |
| public | <strong>driverCheck()</strong> : <em>bool</em> |
| public | <strong>driverPreWrap(</strong><em>\Phpfastcache\Core\Item\ExtendedCacheItemInterface</em> <strong>$item</strong>)</strong> : <em>array</em> |
| public | <strong>driverUnwrapCdate(</strong><em>array</em> <strong>$wrapper</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\?DateTimeInterface</em> |
| public | <strong>driverUnwrapData(</strong><em>array</em> <strong>$wrapper</strong>)</strong> : <em>mixed</em> |
| public | <strong>driverUnwrapEdate(</strong><em>array</em> <strong>$wrapper</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\?DateTimeInterface</em> |
| public | <strong>driverUnwrapMdate(</strong><em>array</em> <strong>$wrapper</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\?DateTimeInterface</em> |
| public | <strong>getClassName()</strong> : <em>string</em> |
| public | <strong>getClassNamespace()</strong> : <em>string</em> |
| public | <strong>getConfig()</strong> : <em>[\Phpfastcache\Drivers\Phparray\Config](#class-phpfastcachedriversphparrayconfig)urationOption</em> |
| public static | <strong>getConfigClass()</strong> : <em>string</em> |
| public | <strong>getDefaultConfig()</strong> : <em>[\Phpfastcache\Drivers\Phparray\Config](#class-phpfastcachedriversphparrayconfig)urationOption</em> |
| public | <strong>getDriverName()</strong> : <em>string</em> |
| public | <strong>getEventManager()</strong> : <em>\Phpfastcache\Drivers\Phparray\EventManagerInterface</em> |
| public | <strong>getHelp()</strong> : <em>string</em> |
| public | <strong>getIO()</strong> : <em>[\Phpfastcache\Drivers\Phparray\Driver](#class-phpfastcachedriversphparraydriver)IO</em> |
| public | <strong>getInstanceId()</strong> : <em>string</em> |
| public | <strong>getItem(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\ExtendedCacheItemInterface</em> |
| public | <strong>getItems(</strong><em>array</em> <strong>$keys=array()</strong>)</strong> : <em>array</em> |
| public | <strong>getItemsAsJsonString(</strong><em>array</em> <strong>$keys=array()</strong>, <em>\int</em> <strong>$option</strong>, <em>\int</em> <strong>$depth=512</strong>)</strong> : <em>string</em><br /><em>Returns A json string that represents an array of items. An indexed array of keys of items to retrieve.</em> |
| public | <strong>getItemsByTag(</strong><em>\string</em> <strong>$tagName</strong>, <em>\int</em> <strong>$strategy=1</strong>)</strong> : <em>ExtendedCacheItemInterface[] A traversable collection of Cache Items keyed by the cache keys of each item. A Cache item will be returned for each key, even if that key is not found. However, if no keys are specified then an empty traversable MUST be returned instead.</em><br /><em>Returns a traversable set of cache items by a tag name. An indexed array of keys of items to retrieve.</em> |
| public | <strong>getItemsByTags(</strong><em>string[]</em> <strong>$tagNames</strong>, <em>\int</em> <strong>$strategy=1</strong>)</strong> : <em>ExtendedCacheItemInterface[] A traversable collection of Cache Items keyed by the cache keys of each item. A Cache item will be returned for each key, even if that key is not found. However, if no keys are specified then an empty traversable MUST be returned instead.</em><br /><em>Returns a traversable set of cache items by one of multiple tag names. An indexed array of keys of items to retrieve.</em> |
| public | <strong>getItemsByTagsAsJsonString(</strong><em>string[]</em> <strong>$tagNames</strong>, <em>\int</em> <strong>$option</strong>, <em>\int</em> <strong>$depth=512</strong>, <em>\int</em> <strong>$strategy=1</strong>)</strong> : <em>string</em><br /><em>Returns A json string that represents an array of items by tags-based. An indexed array of keys of items to retrieve.</em> |
| public | <strong>getPath(</strong><em>bool</em> <strong>$readonly=false</strong>)</strong> : <em>string</em> |
| public | <strong>getStats()</strong> : <em>[\Phpfastcache\Drivers\Phparray\Driver](#class-phpfastcachedriversphparraydriver)Statistic</em><br /><em>Provide a generic getStats() method for files-based drivers</em> |
| public | <strong>hasEventManager()</strong> : <em>bool</em> |
| public | <strong>hasItem(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>bool</em> |
| public | <strong>incrementItemsByTag(</strong><em>\string</em> <strong>$tagName</strong>, <em>\int</em> <strong>$step=1</strong>, <em>\int</em> <strong>$strategy=1</strong>)</strong> : <em>bool True if the item was successfully incremented. False if there was an error.</em><br /><em>Increment the items from the pool by tag. The tag for which to increment</em> |
| public | <strong>incrementItemsByTags(</strong><em>string[]</em> <strong>$tagNames</strong>, <em>\int</em> <strong>$step=1</strong>, <em>\int</em> <strong>$strategy=1</strong>)</strong> : <em>bool True if the items were successfully incremented. False if there was an error.</em><br /><em>Increment the items from the pool by one of multiple tag names. The tag for which to increment</em> |
| public | <strong>isAttached(</strong><em>\Psr\Cache\CacheItemInterface</em> <strong>$item</strong>)</strong> : <em>bool/null</em><br /><em>Returns true if the item exists, is attached and the Spl Hash matches Returns false if the item exists, is attached and the Spl Hash mismatches Returns null if the item does not exists</em> |
| public | <strong>prependItemsByTag(</strong><em>\string</em> <strong>$tagName</strong>, <em>array/string</em> <strong>$data</strong>, <em>\int</em> <strong>$strategy=1</strong>)</strong> : <em>bool True if the item was successfully prepended. False if there was an error.</em><br /><em>Prepend the items from the pool by tag. The tag for which to prepend</em> |
| public | <strong>prependItemsByTags(</strong><em>string[]</em> <strong>$tagNames</strong>, <em>array/string</em> <strong>$data</strong>, <em>\int</em> <strong>$strategy=1</strong>)</strong> : <em>bool True if the item was successfully prepended. False if there was an error.</em><br /><em>Prepend the items from the pool by one of multiple tag names. The tag for which to prepend</em> |
| public | <strong>save(</strong><em>\Psr\Cache\CacheItemInterface</em> <strong>$item</strong>)</strong> : <em>bool</em> |
| public | <strong>saveDeferred(</strong><em>\Psr\Cache\CacheItemInterface</em> <strong>$item</strong>)</strong> : <em>\Psr\Cache\CacheItemInterface</em> |
| public | <strong>saveMultiple(</strong><em>\Phpfastcache\Core\Pool\ExtendedCacheItemInterface[]</em> <strong>$items</strong>)</strong> : <em>bool</em><br /><em>Save multiple items, possible uses: saveMultiple([$item1, $item2, $item3]); saveMultiple($item1, $item2, $item3);</em> |
| public | <strong>setConfig(</strong><em>\Phpfastcache\Config\ConfigurationOption</em> <strong>$config</strong>)</strong> : <em>void</em> |
| public | <strong>setEventManager(</strong><em>\Phpfastcache\Event\EventManagerInterface</em> <strong>$em</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\EventManagerDispatcherInterface</em> |
| public | <strong>setItem(</strong><em>\Psr\Cache\CacheItemInterface</em> <strong>$item</strong>)</strong> : <em>void</em> |
| protected static | <strong>cleanFileName(</strong><em>mixed</em> <strong>$filename</strong>)</strong> : <em>string</em> |
| protected | <strong>cleanItemTags(</strong><em>\Phpfastcache\Core\Item\ExtendedCacheItemInterface</em> <strong>$item</strong>)</strong> : <em>void</em> |
| protected static | <strong>createClassMap(</strong><em>\Phpfastcache\Drivers\Phparray\Iterator/string/array</em> <strong>$dir</strong>)</strong> : <em>array A class map array</em><br /><em>Iterate over all files in the given directory searching for classes. NOTICE: This method has been borrowed from Symfony ClassLoader 3.4 since they deprecated the whole component as of SF4. Our thanks to them.</em> |
| protected | <strong>decode(</strong><em>string/null</em> <strong>$value</strong>)</strong> : <em>mixed</em><br /><em>Decode data types such as object/array for driver that does not support non-scalar value</em> |
| protected | <strong>deregisterItem(</strong><em>\string</em> <strong>$item</strong>)</strong> : <em>void</em> |
| protected | <strong>driverClear()</strong> : <em>bool</em> |
| protected | <strong>driverConnect()</strong> : <em>bool</em> |
| protected | <strong>driverDelete(</strong><em>\Psr\Cache\CacheItemInterface</em> <strong>$item</strong>)</strong> : <em>bool</em> |
| protected | <strong>driverRead(</strong><em>\Psr\Cache\CacheItemInterface</em> <strong>$item</strong>)</strong> : <em>null/array</em> |
| protected | <strong>driverUnwrapTags(</strong><em>array</em> <strong>$wrapper</strong>)</strong> : <em>mixed</em> |
| protected | <strong>driverWrite(</strong><em>\Psr\Cache\CacheItemInterface</em> <strong>$item</strong>)</strong> : <em>bool</em> |
| protected | <strong>driverWriteTags(</strong><em>\Phpfastcache\Core\Item\ExtendedCacheItemInterface</em> <strong>$item</strong>)</strong> : <em>bool</em> |
| protected | <strong>encode(</strong><em>mixed</em> <strong>$data</strong>)</strong> : <em>string</em><br /><em>Encode data types such as object/array for driver that does not support non-scalar value</em> |
| protected | <strong>encodeFilename(</strong><em>mixed</em> <strong>$keyword</strong>)</strong> : <em>string</em> |
| protected | <strong>fetchItemsByTagFromBackend(</strong><em>\string</em> <strong>$tagName</strong>)</strong> : <em>array</em> |
| protected static | <strong>findClasses(</strong><em>\string</em> <strong>$path</strong>)</strong> : <em>array The found classes</em><br /><em>Extract the classes in the given file. NOTICE: This method has been borrowed from Symfony ClassLoader 3.4 since they deprecated the whole component as of SF4. Our thanks to them.</em> |
| protected | <strong>getDefaultChmod()</strong> : <em>int</em> |
| protected | <strong>getFilePath(</strong><em>mixed</em> <strong>$keyword</strong>, <em>bool</em> <strong>$skip=false</strong>)</strong> : <em>string</em> |
| protected | <strong>getTagKey(</strong><em>\string</em> <strong>$key</strong>)</strong> : <em>string</em> |
| protected | <strong>getTagKeys(</strong><em>array</em> <strong>$keys</strong>)</strong> : <em>array</em> |
| protected | <strong>htaccessGen(</strong><em>mixed</em> <strong>$path</strong>, <em>bool</em> <strong>$create=true</strong>)</strong> : <em>void</em> |
| protected | <strong>isPHPModule()</strong> : <em>bool</em><br /><em>Check if phpModule or CGI</em> |
| protected | <strong>readFile(</strong><em>mixed</em> <strong>$file</strong>)</strong> : <em>string</em> |
| protected | <strong>writefile(</strong><em>\string</em> <strong>$file</strong>, <em>\string</em> <strong>$data</strong>, <em>\bool</em> <strong>$secureFileManipulation=false</strong>)</strong> : <em>bool</em> |

*This class implements \Phpfastcache\Core\Pool\ExtendedCacheItemPoolInterface, \Phpfastcache\Cluster\AggregatablePoolInterface, \Phpfastcache\Core\Pool\TaggableCacheItemPoolInterface, \Phpfastcache\Util\ClassNamespaceResolverInterface, \Phpfastcache\Event\EventManagerDispatcherInterface, \Psr\Cache\CacheItemPoolInterface*

<hr /><a id="class-phpfastcachedriversphparrayitem"></a>

### Class: \Phpfastcache\Drivers\Phparray\Item

> Class Item

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__BaseConstruct(</strong><em>\Phpfastcache\Core\Pool\ExtendedCacheItemPoolInterface</em> <strong>$driver</strong>, <em>mixed</em> <strong>$key</strong>)</strong> : <em>void</em><br /><em>Item constructor.</em> |
| public | <strong>__construct(</strong><em>[\Phpfastcache\Drivers\Phparray\Driver](#class-phpfastcachedriversphparraydriver)</em> <strong>$driver</strong>, <em>mixed</em> <strong>$key</strong>)</strong> : <em>void</em><br /><em>Item constructor.</em> |
| public | <strong>__debugInfo()</strong> : <em>array</em> |
| public | <strong>addTag(</strong><em>mixed/\string</em> <strong>$tagName</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\ExtendedCacheItemInterface</em> |
| public | <strong>addTags(</strong><em>array</em> <strong>$tagNames</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\ExtendedCacheItemInterface</em> |
| public | <strong>append(</strong><em>array/string</em> <strong>$data</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\ExtendedCacheItemInterface</em> |
| public | <strong>decrement(</strong><em>int</em> <strong>$step=1</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\ExtendedCacheItemInterface</em> |
| public | <strong>doesItemBelongToThatDriverBackend(</strong><em>\Phpfastcache\Core\Pool\ExtendedCacheItemPoolInterface</em> <strong>$driverPool</strong>)</strong> : <em>bool</em> |
| public | <strong>expiresAfter(</strong><em>\Phpfastcache\Drivers\Phparray\DateInterval/int</em> <strong>$time</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\$this</em> |
| public | <strong>expiresAt(</strong><em>\Phpfastcache\Drivers\Phparray\DateTimeInterface</em> <strong>$expiration</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\ExtendedCacheItemInterface</em> |
| public | <strong>get()</strong> : <em>mixed</em> |
| public | <strong>getClassName()</strong> : <em>string</em> |
| public | <strong>getClassNamespace()</strong> : <em>string</em> |
| public | <strong>getCreationDate()</strong> : <em>\Phpfastcache\Drivers\Phparray\DateTimeInterface</em> |
| public | <strong>getDataAsJsonString(</strong><em>\int</em> <strong>$option</strong>, <em>\int</em> <strong>$depth=512</strong>)</strong> : <em>string</em><br /><em>Return the data as a well-formatted string. Any scalar value will be casted to an array</em> |
| public | <strong>getEncodedKey()</strong> : <em>string</em> |
| public | <strong>getEventManager()</strong> : <em>\Phpfastcache\Drivers\Phparray\EventManagerInterface</em> |
| public | <strong>getExpirationDate()</strong> : <em>\Phpfastcache\Drivers\Phparray\DateTimeInterface</em> |
| public | <strong>getKey()</strong> : <em>string</em> |
| public | <strong>getLength()</strong> : <em>int</em><br /><em>Return the data length: Either the string length if it's a string (binary mode) # or the number of element (count) if it's an array # or the number returned by count() if it's an object implementing \Countable interface # -1 for anything else</em> |
| public | <strong>getModificationDate()</strong> : <em>\Phpfastcache\Drivers\Phparray\DateTimeInterface</em> |
| public | <strong>getRemovedTags()</strong> : <em>array</em> |
| public | <strong>getTags()</strong> : <em>array</em> |
| public | <strong>getTagsAsString(</strong><em>\string</em> <strong>$separator=`', '`</strong>)</strong> : <em>string</em> |
| public | <strong>getTtl()</strong> : <em>int</em> |
| public | <strong>hasEventManager()</strong> : <em>bool</em> |
| public | <strong>increment(</strong><em>int</em> <strong>$step=1</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\ExtendedCacheItemInterface</em> |
| public | <strong>isEmpty()</strong> : <em>bool</em> |
| public | <strong>isExpired()</strong> : <em>bool</em> |
| public | <strong>isHit()</strong> : <em>bool</em> |
| public | <strong>isNull()</strong> : <em>bool</em> |
| public | <strong>jsonSerialize()</strong> : <em>mixed</em><br /><em>Implements \JsonSerializable interface</em> |
| public | <strong>prepend(</strong><em>array/string</em> <strong>$data</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\ExtendedCacheItemInterface</em> |
| public | <strong>removeTag(</strong><em>mixed/\string</em> <strong>$tagName</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\ExtendedCacheItemInterface</em> |
| public | <strong>removeTags(</strong><em>array</em> <strong>$tagNames</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\ExtendedCacheItemInterface</em> |
| public | <strong>set(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\$this</em> |
| public | <strong>setCreationDate(</strong><em>\DateTimeInterface</em> <strong>$date</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\ExtendedCacheItemInterface</em> |
| public | <strong>setDriver(</strong><em>\Phpfastcache\Core\Pool\ExtendedCacheItemPoolInterface</em> <strong>$driver</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\static</em> |
| public | <strong>setEventManager(</strong><em>\Phpfastcache\Event\EventManagerInterface</em> <strong>$em</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\EventManagerDispatcherInterface</em> |
| public | <strong>setExpirationDate(</strong><em>\DateTimeInterface</em> <strong>$expiration</strong>)</strong> : <em>ExtendedCacheItemInterface The called object.</em><br /><em>Alias of expireAt() with forced $expiration param The point in time after which the item MUST be considered expired. If null is passed explicitly, a default value MAY be used. If none is set, the value should be stored permanently or for as long as the implementation allows.</em> |
| public | <strong>setHit(</strong><em>bool</em> <strong>$isHit</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\ExtendedCacheItemInterface</em> |
| public | <strong>setModificationDate(</strong><em>\DateTimeInterface</em> <strong>$date</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\ExtendedCacheItemInterface</em> |
| public | <strong>setTags(</strong><em>array</em> <strong>$tags</strong>)</strong> : <em>\Phpfastcache\Drivers\Phparray\ExtendedCacheItemInterface</em> |
| protected static | <strong>createClassMap(</strong><em>\Phpfastcache\Drivers\Phparray\Iterator/string/array</em> <strong>$dir</strong>)</strong> : <em>array A class map array</em><br /><em>Iterate over all files in the given directory searching for classes. NOTICE: This method has been borrowed from Symfony ClassLoader 3.4 since they deprecated the whole component as of SF4. Our thanks to them.</em> |
| protected | <strong>demutateDatetime(</strong><em>\DateTimeInterface</em> <strong>$dateTime</strong>)</strong> : <em>void</em> |
| protected static | <strong>findClasses(</strong><em>\string</em> <strong>$path</strong>)</strong> : <em>array The found classes</em><br /><em>Extract the classes in the given file. NOTICE: This method has been borrowed from Symfony ClassLoader 3.4 since they deprecated the whole component as of SF4. Our thanks to them.</em> |

*This class implements \Phpfastcache\Core\Item\ExtendedCacheItemInterface, \Phpfastcache\Core\Item\TaggableCacheItemInterface, \JsonSerializable, \Phpfastcache\Util\ClassNamespaceResolverInterface, \Phpfastcache\Event\EventManagerDispatcherInterface, \Psr\Cache\CacheItemInterface*

