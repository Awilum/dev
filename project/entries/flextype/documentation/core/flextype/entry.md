---
title: Flextype
description: Common part of Flextype is a Flextype Core Class that extends Slim Framework that we are using under the hood. Slim is amazing PHP micro framework that helps quickly write simple yet powerful web applications and APIs.
template: flextype/docs
visibility: draft
seo:
  title: Core for Modern Open Source Flat Files Flextype CMS
order: 1
breadcrumbs:
  -
    title: "Core Concepts"
    link: "[url]/flextype/documentation/core/"
on_this_page:
  -
    title: "Methods"
    link: "methods"
    level2:
      -
        title: "getInstance"
        link: "methods-getInstance"
      -
        title: "getVersion"
        link: "methods-getVersion"
      -
        title: "container"
        link: "methods-container"
      -
        title: "app"
        link: "methods-app"
  -
    title: "Helpers"
    link: "helpers"
    level2:
        -
            title: "flextype"
            link: "helpers-flextype"
        -
            title: "app"
            link: "helpers-app"
        -
            title: "container"
            link: "helpers-container"
        -
            title: "console"
            link: "helpers-console"
        -
            title: "emitter"
            link: "helpers-emitter"
        -
            title: "cache"
            link: "helpers-cache"
        -
            title: "entries"
            link: "helpers-entries"
        -
            title: "parsers"
            link: "helpers-parsers"
        -
            title: "serializers"
            link: "helpers-serializers"
        -
            title: "logger"
            link: "helpers-logger"
        -
            title: "session"
            link: "helpers-session"
        -
            title: "registry"
            link: "helpers-registry"
        -
            title: "actions"
            link: "helpers-actions"
        -
            title: "csrf"
            link: "helpers-csrf"
        -
            title: "plugins"
            link: "helpers-plugins"
        -
            title: "slugify"
            link: "helpers-slugify"
---

A common part of Flextype is a Flextype Core Class that extends [Slim Framework](//slimframework.com) that we are using under the hood. Slim is an amazing PHP micro-framework that helps quickly write simple yet powerful web applications and APIs.

**Slim Framework Resources**
* **Website:** [slimframework.com](//slimframework.com)
* **Documentation:** [slimframework.com/docs/v4/](//slimframework.com/docs/v4/)
* **Repository:** [github.com/slimphp/Slim](//github.com/slimphp/Slim)


With the help of Flextype Core Class, you can access all built-in features and develop new amazing features for Flextype powered projects.

### <a name="methods"></a> Methods

<table>
    <thead>
        <tr>
            <th>Method</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="#methods-getInstance">getInstance</a></td>
            <td>Get the available Flextype Application instance.</td>
        </tr>
        <tr>
            <td><a href="#methods-getVersion">getVersion</a></td>
            <td>Get current Flextype version.</td>
        </tr>
        <tr>
            <td><a href="#methods-container">container</a></td>
            <td>Get Flextype Application Container.</td>
        </tr>
        <tr>
            <td><a href="#methods-app">app</a></td>
            <td>Get Flextype Application.</td>
        </tr>
    </tbody>
</table>

### Methods Details

##### <a name="methods-getInstance"></a> `getInstance`

Get the available Flextype Application instance.

```php
/**
 * Returns Flextype Instance.
 *
 * Gets the instance via lazy initialization (created on first usage)
 *
 * @return Flextype Returns the current Flextype Instance.
 *
 * @access public
 */
public static function getInstance(?ContainerInterface $container = null): Flextype
```

**Examples**

```php
$instance = Flextype::getInstance();
```

##### <a name="methods-getVersion"></a> `getVersion`

Get current Flextype version.

```php
/**
 * Get the current Flextype version.
 *
 * @return string Returns the current Flextype version.
 *
 * @access public
 */
public function getVersion(): string
```

**Examples**

```php
$version = Flextype::getInstance()->getVersion();
```

##### <a name="methods-container"></a> `container`

Get Flextype Application Container.

```php
/**
 * Get Flextype Application Container.
 *
 * @return Container Returns Flextype Application Container.
 *
 * @access public
 */
public function container(): Container
```

**Examples**

```php
$container = Flextype::getInstance()->container();
```

### Services <a name="services"></a>

List of available registered services in Flextype Dependency Injection Container.

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Links</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>session</td>
            <td><a href="https://awilum.github.io/glowyphp/session/">documentation</a></td>
        </tr>
        <tr>
            <td>registry</td>
            <td><a href="https://awilum.github.io/glowyphp/registry/">documentation</a></td>
        </tr>
        <tr>
            <td>logger</td>
            <td><a href="https://github.com/Seldaek/monolog">documentation</a></td>
        </tr>
        <tr>
            <td>emitter</td>
            <td><a href="https://event.thephpleague.com">documentation</a></td>
        </tr>
        <tr>
            <td>slugify</td>
            <td><a href="https://github.com/cocur/slugify">documentation</a></td>
        </tr>
        <tr>
            <td>cache</td>
            <td><a href="https://www.phpfastcache.com">documentation</a></td>
        </tr>
        <tr>
            <td>parsers</td>
            <td><a href="[url]/flextype/documentation/core/parsers">documentation</a></td>
        </tr>
        <tr>
            <td>serializers</td>
            <td><a href="[url]/flextype/documentation/core/serializers">documentation</a></td>
        </tr>
        <tr>
            <td>entries</td>
            <td><a href="[url]/flextype/documentation/core/entries">documentation</a></td>
        </tr>
        <tr>
            <td>plugins</td>
            <td><a href="[url]/flextype/documentation/core/plugins">documentation</a></td>
        </tr>
        <tr>
            <td>plugins</td>
            <td><a href="[url]/flextype/documentation/core/console">console</a></td>
        </tr>
        <tr>
            <td>cors</td>
            <td><a href="#">documentation</a></td>
        </tr>
    </tbody>
</table>
