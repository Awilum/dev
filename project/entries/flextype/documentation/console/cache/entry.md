---
title: Cache
template: flextype/docs
order: 2
seo:
  title: Cache | Flextype
breadcrumbs:
  -
    title: "Console"
    link: "[url]/flextype/flextype/documentation/console/"
on_this_page:
  -
    title: "Commands"
    link: "commands"
    level2:
      -
        title: "cache:clear"
        link: "commands-cache-clear"
      -
        title: "cache:clear-config"
        link: "commands-cache-clear-config"
      -
        title: "cache:clear-data"
        link: "commands-cache-clear-data"
      -
        title: "cache:clear-routes"
        link: "commands-cache-clear-routes"
      -
        title: "cache:delete"
        link: "commands-cache-delete"
      -
        title: "cache:delete-multiple"
        link: "commands-cache-delete-multiple"
      -
        title: "cache:get"
        link: "commands-cache-get"
      -
        title: "cache:get-multiple"
        link: "commands-cache-get-multiple"
      -
        title: "cache:has"
        link: "commands-cache-has"
      -
        title: "cache:set"
        link: "commands-cache-set"
      -
        title: "cache:set-multiple"
        link: "commands-cache-set-multiple"
---

### <a name="commands"></a> Commands

<table>
    <thead>
        <tr>
            <th>Command</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="#commands-cache-clear">cache:clear</a></td>
            <td>Clear cache.</td>
        </tr>
        <tr>
            <td><a href="#commands-cache-clear-config">cache:clear-config</a></td>
            <td>Clear cache config.</td>
        </tr>
        <tr>
            <td><a href="#commands-cache-clear-data">cache:clear-data</a></td>
            <td>Clear cache data.</td>
        </tr>
        <tr>
            <td><a href="#commands-cache-clear-routes">cache:clear-routes</a></td>
            <td>Clear cache routes.</td>
        </tr>
        <tr>
            <td><a href="#commands-cache-delete">cache:delete</a></td>
            <td>Delete item.</td>
        </tr>
        <tr>
            <td><a href="#commands-cache-delete-multiple">cache:delete-multiple</a></td>
            <td>Delete multiple items.</td>
        </tr>
        <tr>
            <td><a href="#commands-cache-get">cache:get</a></td>
            <td>Get item.</td>
        </tr>
        <tr>
            <td><a href="#commands-cache-get">cache:get-multiple</a></td>
            <td>Get multiple items.</td>
        </tr>
        <tr>
            <td><a href="#commands-cache-has">cache:has</a></td>
            <td>Check whether cache item exists.</td>
        </tr>
              <tr>
            <td><a href="#commands-cache-set">cache:set</a></td>
            <td>Set item.</td>
        </tr>
        <tr>
            <td><a href="#commands-cache-set-multiple">cache:set-multiple</a></td>
            <td>Set multiple items.</td>
        </tr>
    </tbody>
</table>

### Commands Details

##### <a name="commands-cache-clear"></a> `cache:clear`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype cache:clear -h

Description:
  Clear cache.

Usage:
  cache:clear

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-cache-clear-config"></a> `cache:clear-config`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype cache:clear-config -h

Description:
  Clear cache config.

Usage:
  cache:clear-config

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-cache-clear-data"></a> `cache:clear-data`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype cache:clear-data -h

Description:
  Clear cache data.

Usage:
  cache:clear-data

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-cache-clear-routes"></a> `cache:clear-routes`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype cache:clear-routes -h

Description:
  Clear cache routes.

Usage:
  cache:clear-routes

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-cache-delete"></a> `cache:delete`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype cache:delete -h

Description:
  Delete item.

Usage:
  cache:delete <key>

Arguments:
  key                   Key.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-cache-delete-multiple"></a> `cache:delete-multiple`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype cache:delete-multiple -h

Description:
  Delete mutiple items.

Usage:
  cache:delete-multiple <keys>

Arguments:
  keys                  Keys.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-cache-get"></a> `cache:get`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype cache:get -h

Description:
  Get item.

Usage:
  cache:get <key> [<default>]

Arguments:
  key                   Key.
  default               Default.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-cache-get-multiple"></a> `cache:get-multiple`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype cache:get-multiple -h

Description:
  Get multiple items.

Usage:
  cache:get-multiple <keys> [<default>]

Arguments:
  keys                  Keys.
  default               Default.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-cache-has"></a> `cache:has`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype cache:get-has -h

Description:
  Check whether cache item exists.

Usage:
  cache:has <key>

Arguments:
  key                   Key.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-cache-set"></a> `cache:set`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype cache:set -h

Description:
  Set item.

Usage:
  cache:set <key> <value> [<ttl>]

Arguments:
  key                   Key.
  value                 Value.
  ttl                   Time To Live.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-cache-set-multiple"></a> `cache:set-multiple`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype cache:set-multiple -h

Description:
  Set multiple items.

Usage:
  cache:set-multiple <values> [<ttl>]

Arguments:
  values                Values.
  ttl                   Time To Live.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```