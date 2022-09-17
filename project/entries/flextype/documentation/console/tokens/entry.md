---
title: Tokens
template: flextype/docs
order: 3
seo:
  title: Tokens Commands for Modern Open Source Flat Files Flextype CMS
  description: Read the documentation about Tokens Commands for Modern Open Source Flat Files Flextype CMS
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
        title: "tokens:fetch"
        link: "commands-tokens-fetch"
      -
        title: "tokens:has"
        link: "commands-tokens-has"
      -
        title: "tokens:generate"
        link: "commands-tokens-generate"
      -
        title: "tokens:generate-hash"
        link: "commands-tokens-generate-hash"
      -
        title: "tokens:verify-hash"
        link: "commands-tokens-verify-hash"
      -
        title: "tokens:create"
        link: "commands-tokens-create"
      -
        title: "tokens:delete"
        link: "commands-tokens-delete"
      -
        title: "tokens:update"
        link: "commands-tokens-update"
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
            <td><a href="#commands-tokens-fetch">tokens:fetch</a></td>
            <td>Fetch entry.</td>
        </tr>
        <tr>
            <td><a href="#commands-tokens-has">tokens:has</a></td>
            <td>Check whether entry exists.</td>
        </tr>
        <tr>
            <td><a href="#commands-tokens-move">tokens:generate</a></td>
            <td>Generate token.</td>
        </tr>
        <tr>
            <td><a href="#commands-tokens-copy">tokens:generate-hash</a></td>
            <td>Generate token hash.</td>
        </tr>
        <tr>
            <td><a href="#commands-tokens-copy">tokens:verify-hash</a></td>
            <td>Verify token hash.</td>
        </tr>
        <tr>
            <td><a href="#commands-tokens-create">tokens:create</a></td>
            <td>Create entry.</td>
        </tr>
        <tr>
            <td><a href="#commands-tokens-delete">tokens:delete</a></td>
            <td>Delete entry.</td>
        </tr>
        <tr>
            <td><a href="#commands-tokens-update">tokens:update</a></td>
            <td>Update entry.</td>
        </tr>
    </tbody>
</table>

### Commands Details

##### <a name="commands-tokens-fetch"></a> `tokens:fetch`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype tokens:fetch -h

Description:
  Fetch token entry.

Usage:
  tokens:fetch [options] [--] [<id> [<options>]]

Arguments:
  id                                                         Unique identifier of the token entry.
  options                                                    Options array.

Options:
      --collection                                           Set this flag to fetch tokens entries collection.
      --find-depth-from[=FIND-DEPTH-FROM]                    Restrict the tokens entries files depth of traversing from.
      --find-depth-to[=FIND-DEPTH-TO]                        Restrict the tokens entries files depth of traversing to.
      --find-date-from[=FIND-DATE-FROM]                      Restrict the tokens entries files by a date range from.
      --find-date-to[=FIND-DATE-TO]                          Restrict the tokens entries files by a date range to.
      --find-size-from[=FIND-SIZE-FROM]                      Restrict the tokens entries files by a size range from.
      --find-size-to[=FIND-SIZE-TO]                          Restrict the tokens entries files by a size range to.
      --find-exclude[=FIND-EXCLUDE]                          Exclude directories from matching.
      --find-contains[=FIND-CONTAINS]                        Find tokens entries files by content.
      --find-not-contains[=FIND-NOT-CONTAINS]                Find tokens entries files by content excludes files containing given pattern.
      --find-path[=FIND-PATH]                                Find tokens entries files and directories by path.
      --find-sort-by-key[=FIND-SORT-BY-KEY]                  Sort the tokens entries files and directories by the last accessed, changed or modified time. Values: atime, mtime, ctime.
      --find-sort-by-direction[=FIND-SORT-BY-DIRECTION]      Sort the tokens entries files and directories by direction. Order direction: DESC (descending) or ASC (ascending)
      --filter-return[=FILTER-RETURN]                        Return items. Valid values: all, first, last, next, random, shuffle
      --filter-group-by[=FILTER-GROUP-BY]                    Group array collection by key.
      --filter-offset[=FILTER-OFFSET]                        Extract a slice of the current array collection with specific offset.
      --filter-limit[=FILTER-LIMIT]                          Extract a slice of the current array collection with offset 0 and specific length.
      --filter-sort-by-key[=FILTER-SORT-BY-KEY]              Sort array collection by key.
      --filter-sort-by-direction[=FILTER-SORT-BY-DIRECTION]  Sort array collection by direction. Order direction: DESC (descending) or ASC (ascending)
      --filter-where[=FILTER-WHERE]                          Filters the array collection fields by a given condition. (multiple values allowed)
  -h, --help                                                 Display help for the given command. When no command is given display help for the list command
  -q, --quiet                                                Do not output any message
  -V, --version                                              Display this application version
      --ansi|--no-ansi                                       Force (or disable --no-ansi) ANSI output
  -n, --no-interaction                                       Do not ask any interactive question
  -v|vv|vvv, --verbose                                       Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-tokens-has"></a> `tokens:has`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype tokens:has -h

Description:
  Check whether token entry exists.

Usage:
  tokens:has <id>

Arguments:
  id                    Unique identifier of the token entry.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-tokens-generate"></a> `tokens:generate`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype tokens:generate -h

Description:
  Generate token.

Usage:
  tokens:generate [<length>]

Arguments:
  length                Token string length.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-tokens-generate-hash"></a> `tokens:generate-hash`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype tokens:generate-hash -h

Description:
  Generate token hash.

Usage:
  tokens:generate-hash [<token>]

Arguments:
  token                 Token string.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-tokens-verify-hash"></a> `tokens:verify-hash`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype tokens:verify-hash -h

Description:
  Verify token hash.

Usage:
  tokens:verify-hash <token> <token-hash>

Arguments:
  token                 Token.
  token-hash            Token hash.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-tokens-create"></a> `tokens:create`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype tokens:create -h

Description:
  Create a new unique token.

Usage:
  tokens:create [<data>]

Arguments:
  data                  Data to create for the token entry.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-tokens-delete"></a> `tokens:delete`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype tokens:delete -h

Description:
  Delete token entry.

Usage:
  tokens:delete <id>

Arguments:
  id                    Unique identifier of the token entry.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-tokens-update"></a> `tokens:update`

<div class="file-header text-center">TERMINAL</div>

```text
bin/flextype tokens:update -h

Description:
  Update tokens entry.

Usage:
  tokens:update <id> [<data>]

Arguments:
  id                    Unique identifier of the token entry.
  data                  Data to update for the token entry.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```