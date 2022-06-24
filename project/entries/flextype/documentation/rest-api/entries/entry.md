---
title: Entries
template: flextype/docs
order: 2
seo:
  title: Entries Rest API | Flextype
breadcrumbs:
  -
    title: "Rest API"
    link: "[url]/flextype/flextype/documentation/rest-api/"
on_this_page:
  -
    title: "Overview"
    link: "overview"
  -
    title: "Endpoints"
    link: "endpoints"
    level2:
        -
            title: '<span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(59 130 246); color: white;">GET</span> /api/v1/entries'
            link: "endpoint-fetch"
        -
            title: '<span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(34 197 94); color: white;">POST</span> /api/v1/entries'
            link: "endpoint-create"
        -
            title: '<span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(20 184 166); color: white;">PATCH</span> /api/v1/entries'
            link: "endpoint-update"
        -
            title: '<span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(249 115 22); color: white;">PUT</span> /api/v1/entries'
            link: "endpoint-move"
        -
            title: '<span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(249 115 22); color: white;">PUT</span> /api/v1/entries/copy'
            link: "endpoint-copy"
        -
            title: '<span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(244 63 94); color: white;">DELETE</span> /api/v1/entries'
            link: "endpoint-delete"
---

The Flextype Entries API organized around Representational State Transfer (REST) for delivering entries from Flextype to apps, websites and other. Entries is delivered as JSON data.

### <a name="endpoints"></a> Endpoints

<table>
    <thead>
        <tr>
            <th>Method</th>
            <th>Endpoint</th>
            <th>Route name</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(59 130 246); color: white;">GET</span></td>
            <td><a href="#endpoint-fetch">/api/v1/entries</a></td>
            <td>entries.fetch</td>
            <td>Fetch entry (entries collection).</td>
        </tr>
        <tr>
            <td><span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(34 197 94); color: white;">POST</span></td>
            <td><a href="#endpoint-create">/api/v1/entries</a></td>
            <td>entries.create</td>
            <td>Create entry.</td>
        </tr>
        <tr>
            <td><span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(20 184 166); color: white;">PATCH</span></td>
            <td><a href="#endpoint-update">/api/v1/entries</td>
            <td>entries.update</td>
            <td>Update entry.</td>
        </tr>
        <tr>
            <td><span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(249 115 22); color: white;">PUT</span></td>
            <td><a href="#endpoint-move">/api/v1/entries</a></td>
            <td>entries.move</td>
            <td>Move entry (entries collection).</td>
        </tr>
        <tr>
            <td><span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(249 115 22); color: white;">PUT</span></td>
            <td><a href="#endpoint-copy">/api/v1/entries/copy</a></td>
            <td>entries.copy</td>
            <td>Copy entry (entries collection).</td>
        </tr>
        <tr>
            <td><span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(244 63 94); color: white;">DELETE</span></td>
            <td><a href="#endpoint-delete">/api/v1/entries</a></td>
            <td>entries.delete</td>
            <td>Delete entry (entries collection).</td>
        </tr>
    </tbody>
</table>

<br>

##### <a name="endpoint-fetch"></a> <span class="text-decoration-none text-sm" style="padding: 4.5px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(59 130 246); color: white;">GET</span> `/api/v1/entries`

Fetch entry or entries collection.

##### Fetch single entry

<div class="file-header">Request</div>

```
GET /api/v1/entries?id=YOUR_ENTRY_ID&[options]&token=YOUR_ENTRIES_TOKEN
```

##### Query

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th></th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>REQUIRED</td>
            <td>Valid Entry ID</td>
        </tr>
        <tr>
            <td>options</td>
            <td>OPTIONAL</td>
            <td>A set of valid arguments to search and sort specific needed entries.</td>
        </tr>
        <tr>
            <td>token</td>
            <td>REQUIRED</td>
            <td>Valid Entries Token.</td>
        </tr>
    </tbody>
</table>

##### Result

Returns the item object for the given unique identifier.

##### Examples

Fetch Movies Entry

<div class="file-header">Request</div>

```
GET /api/v1/entries?id=movies&token=6f047babd1894064fbf7662080a9a2f0
```

##### Fetch entries collection

<div class="file-header">Request</div>

```
GET /api/v1/entries?id=YOUR_ENTRY_ID&options[collection]=true&token=YOUR_ENTRIES_TOKEN
```

##### Query


<table>
    <thead>
        <tr>
            <th>Name</th>
            <th></th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>REQUIRED</td>
            <td>Valid Entry ID</td>
        </tr>
        <tr>
            <td>options</td>
            <td>OPTIONAL</td>
            <td>A set of valid arguments to search and sort specific needed entries.</td>
        </tr>
        <tr>
            <td>token</td>
            <td>REQUIRED</td>
            <td>Valid Entries Token.</td>
        </tr>
    </tbody>
</table>

##### Result

Returns an array of item objects.

##### Examples

Fetch Movies Collection

<div class="file-header">Request</div>

```
GET /api/v1/entries?id=movies&options[collection]=true&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equal to **Cathy Yan**

<div class="file-header">Request</div>

```
GET /api/v1/entries?id=movies&options[collection]=true&options[filter][where][0][key]=director&options[filter][where][9][operator]=eq&options[filter][where][0][value]=Cathy+Yan&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equal to **Cathy Yan** and where year is equal to **2020** and where genre is contains **action**

<div class="file-header">Request</div>

```
GET /api/v1/entries?id=movies&options[collection]=true&options[filter][where][0][key]=director&options[filter][where][0][operator]=eq&options[filter][where][0][value]=Cathy+Yan&options[filter][where][1][key]=year&options[filter][where][1][operator]=eq&options[filter][where][1][value]=2020&options[filter][where][2][key]=genre&options[filter][where][1][operator]=contains&options[filter][where][1][value]=drama&token=6f047babd1894064fbf7662080a9a2f0
```

##### Options

You can send options for the query to search items in a collection that matches the specific filter's conditions.  

`options` is an array of valid values for [filter()](s://github.com/flextype/flextype/blob/dev/src/flextype/Support/Helpers/FilterHelper.php) and [find()](s://github.com/flextype/flextype/blob/dev/src/flextype/Support/Helpers/FindHelper.php) helpers.

<br>

##### <a name="endpoint-create"></a> <span class="text-decoration-none text-sm" style="padding: 4.5px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(34 197 94); color: white;">POST</span> `/api/v1/entries`

Create entry.

<div class="file-header">Request</div>

```
POST /api/v1/entries
```

##### Body

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th></th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>REQUIRED</td>
            <td>Unique identifier of the entry.</td>
        </tr>
        <tr>
            <td>token</td>
            <td>REQUIRED</td>
            <td>Valid Entries token.</td>
        </tr>
        <tr>
            <td>access_token</td>
            <td>REQUIRED</td>
            <td>Valid Access token.</td>
        </tr>
        <tr>
            <td>data</td>
            <td>REQUIRED</td>
            <td>Data to store for the entry.</td>
        </tr>
    </tbody>
</table>

##### Result
Returns the entry item object for the entry item that was just created.

##### Examples

Create new entry **platform**

<div class="file-header">Request</div>

```
POST /api/v1/entries
```

<div class="file-header">Body</div>

```json
{
	"id": "movies/platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018",
	"data": {
		"title": "Platform",
		"content": "The Platform (Spanish: El hoyo, transl. The Hole) is a Spanish science fiction horror-thriller film, directed by Galder Gaztelu-Urrutia and released in 2019."
	}
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>

```json
{
    "data": {
        "title": "Platform",
        "uuid": "7e724722-da2f-410f-abd2-f44fbea1f6f0",
        "published_at": 1587118620,
        "created_at": 1587118620,
        "published_by": "",
        "created_by": "",
        "routable": true,
        "visibility": "visible",
        "content": "The Platform (Spanish: El hoyo, transl. The Hole) is a Spanish science fiction horror-thriller film, directed by Galder Gaztelu-Urrutia and released in 2019.",
        "modified_at": 1587118658,
        "slug": "movies/platform"
    }
}
```

<br>

##### <a name="endpoint-update"></a> <span class="text-decoration-none text-sm" style="padding: 4.5px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(20 184 166); color: white;">PATCH</span> `/api/v1/entries`

Update entry.

<div class="file-header">Request</div>

```
PATCH /api/v1/entries
```

##### Body

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th></th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>REQUIRED</td>
            <td>Unique identifier of the entry.</td>
        </tr>
        <tr>
            <td>token</td>
            <td>REQUIRED</td>
            <td>Valid Entries token.</td>
        </tr>
        <tr>
            <td>access_token</td>
            <td>REQUIRED</td>
            <td>Valid Access token.</td>
        </tr>
        <tr>
            <td>data</td>
            <td>REQUIRED</td>
            <td>Data to store for the entry.</td>
        </tr>
    </tbody>
</table>

##### Result
Returns the entry item object for the entry item that was just updated.

##### Examples

Update content for entry **platform**

<div class="file-header">Request</div>

```
PATCH /api/v1/entries
```

<div class="file-header">Body</div>

```json
{
	"id": "movies/platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018",
	"data": {
		"content": "A vertical prison with one cell per level. Two people per cell. One only food platform and two minutes per day to feed from up to down. An endless nightmare trapped in The Hole."
	}
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>

```json
{
    "data": {
        "title": "Platform",
        "uuid": "7e724722-da2f-410f-abd2-f44fbea1f6f0",
        "published_at": 1587118620,
        "created_at": 1587118620,
        "published_by": "",
        "created_by": "",
        "routable": true,
        "visibility": "visible",
        "content": "A vertical prison with one cell per level. Two people per cell. One only food platform and two minutes per day to feed from up to down. An endless nightmare trapped in The Hole.",
        "modified_at": 1587119140,
        "slug": "movies/platform"
    }
}
```

<br>

##### <a name="endpoint-move"></a> <span class="text-decoration-none text-sm" style="padding: 4.5px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(249 115 22); color: white;">PUT</span> `/api/v1/entries`

Move entry.

<div class="file-header">Request</div>

```
PUT /api/v1/entries
```

##### Body

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th></th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>REQUIRED</td>
            <td>Unique identifier of the entry.</td>
        </tr>
        <tr>
            <td>new_id</td>
            <td>REQUIRED</td>
            <td>New Unique identifier of the entry.</td>
        </tr>
        <tr>
            <td>token</td>
            <td>REQUIRED</td>
            <td>Valid Entries token.</td>
        </tr>
        <tr>
            <td>access_token</td>
            <td>REQUIRED</td>
            <td>Valid Access token.</td>
        </tr>
    </tbody>
</table>

##### Result
Returns the entry item object for the entry item that was just moved.

##### Examples

Move entry **platform** to the **the-platform**

<div class="file-header">Request</div>

```
PUT /api/v1/entries
```

<div class="file-header">Body</div>

```json
{
	"id": "movies/platform",
    "new_id": "movies/the-platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>

```json
{
    "data": {
        "title": "Platform",
        "uuid": "7e724722-da2f-410f-abd2-f44fbea1f6f0",
        "published_at": 1587118620,
        "created_at": 1587118620,
        "published_by": "",
        "created_by": "",
        "routable": true,
        "visibility": "visible",
        "content": "A vertical prison with one cell per level. Two people per cell. One only food platform and two minutes per day to feed from up to down. An endless nightmare trapped in The Hole.",
        "modified_at": 1587119140,
        "slug": "movies/the-platform"
    }
}
```

Move entry **movies/the-platform** to the **movies/2019/the-platform**

<div class="file-header">Request</div>

```
PUT /api/v1/entries
```

<div class="file-header">Body</div>

```json
{
	"id": "movies/the-platform",
    "new_id": "movies/2019/the-platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>

```json
{
    "data": {
        "title": "Platform",
        "uuid": "7e724722-da2f-410f-abd2-f44fbea1f6f0",
        "published_at": 1587118620,
        "created_at": 1587118620,
        "published_by": "",
        "created_by": "",
        "routable": true,
        "visibility": "visible",
        "content": "A vertical prison with one cell per level. Two people per cell. One only food platform and two minutes per day to feed from up to down. An endless nightmare trapped in The Hole.",
        "modified_at": 1587119140,
        "slug": "movies/2019/the-platform"
    }
}
```

<br>

##### <a name="endpoint-copy"></a> <span class="text-decoration-none text-sm" style="padding: 4.5px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(249 115 22); color: white;">PUT</span> `/api/v1/entries/copy`

Copy entry (entries collection).

<div class="file-header">Request</div>

```
PUT /api/v1/entries/copy
```

##### Body

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th></th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>REQUIRED</td>
            <td>Unique identifier of the entry.</td>
        </tr>
        <tr>
            <td>new_id</td>
            <td>REQUIRED</td>
            <td>New Unique identifier of the entry.</td>
        </tr>
        <tr>
            <td>token</td>
            <td>REQUIRED</td>
            <td>Valid Entries token.</td>
        </tr>
        <tr>
            <td>access_token</td>
            <td>REQUIRED</td>
            <td>Valid Access token.</td>
        </tr>
    </tbody>
</table>

##### Result
Returns the entry item object for the entry item that was just copied.

##### Examples

Copy for entry **movies/2019/the-platform** to **movies/horror/the-platform**

<div class="file-header">Request</div>

```
PUT /api/v1/entries/copy
```

<div class="file-header">Body</div>

```json
{
	"id": "movies/2019/the-platform",
    "new_id": "movies/horror/the-platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>

```json
{
    "data": {
        "title": "Platform",
        "uuid": "7e724722-da2f-410f-abd2-f44fbea1f6f0",
        "published_at": 1587118620,
        "created_at": 1587118620,
        "published_by": "",
        "created_by": "",
        "routable": true,
        "visibility": "visible",
        "content": "A vertical prison with one cell per level. Two people per cell. One only food platform and two minutes per day to feed from up to down. An endless nightmare trapped in The Hole.",
        "modified_at": 1587139514,
        "slug": "movies/horror/the-platform"
    }
}
```

<br>

##### <a name="endpoint-delete"></a> <span class="text-decoration-none text-sm" style="padding: 4.5px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.25rem; background: rgb(244 63 94); color: white;">DELETE</span> `/api/v1/entries`

Delete entry.

<div class="file-header">Request</div>

```
DELETE /api/v1/entries
```

##### Body

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th></th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>REQUIRED</td>
            <td>Unique identifier of the entry.</td>
        </tr>
        <tr>
            <td>token</td>
            <td>REQUIRED</td>
            <td>Valid Entries token.</td>
        </tr>
        <tr>
            <td>access_token</td>
            <td>REQUIRED</td>
            <td>Valid Access token.</td>
        </tr>
    </tbody>
</table>

##### Result
Returns an empty body with  status 204

##### Examples

Delete entry **movies/horror/the-platform**

<div class="file-header">Request</div>

```
DELETE /api/v1/entries
```

<div class="file-header">Body</div>

```json
{
	"id": "movies/horror/the-platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```
