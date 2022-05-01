---
title: Entries
template: flextype/docs
order: 2
seo:
  title: Entries | Flextype
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
        title: "entries:fetch"
        link: "commands-entries-fetch"
      -
        title: "entries:has"
        link: "commands-entries-has"
      -
        title: "entries:move"
        link: "commands-entries-move"
      -
        title: "entries:copy"
        link: "commands-entries-copy"
      -
        title: "entries:create"
        link: "commands-entries-create"
      -
        title: "entries:delete"
        link: "commands-entries-delete"
      -
        title: "entries:update"
        link: "commands-entries-update"
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
            <td><a href="#commands-entries-fetch">entries:fetch</a></td>
            <td>Fetch entry.</td>
        </tr>
        <tr>
            <td><a href="#commands-entries-has">entries:has</a></td>
            <td>Check whether entry exists.</td>
        </tr>
        <tr>
            <td><a href="#commands-entries-move">entries:move</a></td>
            <td>Move entry.</td>
        </tr>
        <tr>
            <td><a href="#commands-entries-copy">entries:copy</a></td>
            <td>Copy entry.</td>
        </tr>
        <tr>
            <td><a href="#commands-entries-create">entries:create</a></td>
            <td>Create entry.</td>
        </tr>
        <tr>
            <td><a href="#commands-entries-delete">entries:delete</a></td>
            <td>Delete entry.</td>
        </tr>
        <tr>
            <td><a href="#commands-entries-update">entries:update</a></td>
            <td>Update entry.</td>
        </tr>
    </tbody>
</table>

### Commands Details

##### <a name="commands-entries-fetch"></a> `entries:fetch`

<div class="file-header">Console</div>

```text
php ./bin/flextype entries:fetch -h

Description:
  Fetch entry.

Usage:
  entries:fetch [options] [--] [<id> [<options>]]

Arguments:
  id                                                         Unique identifier of the entry.
  options                                                    Options array.

Options:
      --collection                                           Set this flag to fetch entries collection.
      --find-depth-from[=FIND-DEPTH-FROM]                    Restrict the entries files depth of traversing from.
      --find-depth-to[=FIND-DEPTH-TO]                        Restrict the entries files depth of traversing to.
      --find-date-from[=FIND-DATE-FROM]                      Restrict the entries files by a date range from.
      --find-date-to[=FIND-DATE-TO]                          Restrict the entries filesby a date range to.
      --find-size-from[=FIND-SIZE-FROM]                      Restrict the entries files by a size range from.
      --find-size-to[=FIND-SIZE-TO]                          Restrict the entries files by a size range to.
      --find-exclude[=FIND-EXCLUDE]                          Exclude directories from matching.
      --find-contains[=FIND-CONTAINS]                        Find entries files by content.
      --find-not-contains[=FIND-NOT-CONTAINS]                Find entries files by content excludes files containing given pattern.
      --find-path[=FIND-PATH]                                Find entries files and directories by path.
      --find-sort-by-key[=FIND-SORT-BY-KEY]                  Sort the entries files and directories by the last accessed, changed or modified time. Values: atime, mtime, ctime.
      --find-sort-by-direction[=FIND-SORT-BY-DIRECTION]      Sort the entries files and directories by direction. Order direction: DESC (descending) or ASC (ascending)
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

##### <a name="commands-entries-has"></a> `entries:has`

<div class="file-header">Console</div>

```text
php ./bin/flextype entries:has -h

Description:
  Check whether entry exists.

Usage:
  entries:has <id>

Arguments:
  id                    Unique identifier of the entry.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-entries-move"></a> `entries:move`

<div class="file-header">Console</div>

```text
php ./bin/flextype entries:move -h

Description:
  Move entry.

Usage:
  entries:move <id> <newID>

Arguments:
  id                    Unique identifier of the entry.
  newID                 New Unique identifier of the entry

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-entries-copy"></a> `entries:copy`

<div class="file-header">Console</div>

```text
php ./bin/flextype entries:copy -h

Description:
  Copy entry.

Usage:
  entries:copy <id> <newID>

Arguments:
  id                    Unique identifier of the entry.
  newID                 New Unique identifier of the entry

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-entries-create"></a> `entries:create`

<div class="file-header">Console</div>

```text
php ./bin/flextype entries:create -h

Description:
  Create entry.

Usage:
  entries:create <id> [<data>]

Arguments:
  id                    Unique identifier of the entry.
  data                  Data to create for the entry.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-entries-delete"></a> `entries:delete`

<div class="file-header">Console</div>

```text
php ./bin/flextype entries:delete -h

Description:
  Delete entry.

Usage:
  entries:delete <id>

Arguments:
  id                    Unique identifier of the entry.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

##### <a name="commands-entries-update"></a> `entries:update`

<div class="file-header">Console</div>

```text
php ./bin/flextype entries:update -h

Description:
  Update entry.

Usage:
  entries:update <id> [<data>]

Arguments:
  id                    Unique identifier of the entry.
  data                  Data to update for the entry.

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```