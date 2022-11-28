---
title: Tokens
template: flextype/docs
order: 2
seo:
  title: Tokens Rest API for Modern Open Source Flat Files Flextype CMS
  description: Read the documentation about Tokens Rest API for Modern Open Source Flat Files Flextype CMS
breadcrumbs:
  -
    title: "Rest API"
    link: "(getBaseUrl)/flextype/flextype/documentation/rest-api/"
on_this_page:
  -
    title: "Endpoints"
    link: "endpoints"
    level2:
        -
            title: '<span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(59 130 246); color: white;">GET</span> /api/v1/tokens'
            link: "endpoint-fetch"
        -
            title: '<span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(34 197 94); color: white;">POST</span> /api/v1/tokens'
            link: "endpoint-create"
        -
            title: '<span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(34 197 94); color: white;">POST</span> /api/v1/tokens/generate'
            link: "endpoint-generate"
        -
            title: '<span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(34 197 94); color: white;">POST</span> /api/v1/tokens/generate-hash'
            link: "endpoint-generate-hash"
        -
            title: '<span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(34 197 94); color: white;">POST</span> /api/v1/tokens/verify-hash'
            link: "endpoint-verify-hash"
        -
            title: '<span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(20 184 166); color: white;">PATCH</span> /api/v1/tokens'
            link: "endpoint-update"
        -
            title: '<span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(244 63 94); color: white;">DELETE</span> /api/v1/tokens'
            link: "endpoint-delete"
---

The Flextype Tokens API organized around Representational State Transfer (REST) for delivering tokens from Flextype to apps, websites and other. Tokens is delivered as JSON data.

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
            <td><span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(59 130 246); color: white;">GET</span></td>
            <td><a href="#endpoint-fetch">/api/v1/tokens</a></td>
            <td>tokens.fetch</td>
            <td>Fetch token (tokens collection).</td>
        </tr>
        <tr>
            <td><span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(34 197 94); color: white;">POST</span></td>
            <td><a href="#endpoint-create">/api/v1/tokens</a></td>
            <td>tokens.create</td>
            <td>Create token.</td>
        </tr>
        <tr>
            <td><span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(34 197 94); color: white;">POST</span></td>
            <td><a href="#endpoint-generate">/api/v1/tokens/generate</a></td>
            <td>tokens.generate</td>
            <td>Generate token.</td>
        </tr>
        <tr>
            <td><span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(34 197 94); color: white;">POST</span></td>
            <td><a href="#endpoint-generate-hash">/api/v1/tokens/generate-hash</a></td>
            <td>tokens.generate-hash</td>
            <td>Generate token hash.</td>
        </tr>
        <tr>
            <td><span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(34 197 94); color: white;">POST</span></td>
            <td><a href="#endpoint-validate-hash">/api/v1/tokens/validate-hash</a></td>
            <td>tokens.validate-hash</td>
            <td>Verify token hash.</td>
        </tr>
        <tr>
            <td><span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(20 184 166); color: white;">PATCH</span></td>
            <td><a href="#endpoint-update">/api/v1/tokens</td>
            <td>tokens.update</td>
            <td>Update token.</td>
        </tr>
        <tr>
            <td><span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(244 63 94); color: white;">DELETE</span></td>
            <td><a href="#endpoint-delete">/api/v1/tokens</a></td>
            <td>tokens.delete</td>
            <td>Delete token (tokens collection).</td>
        </tr>
    </tbody>
</table>

<br>

##### <a name="endpoint-fetch"></a> <span class="text-decoration-none text-sm" style="padding: 4.5px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(59 130 246); color: white;">GET</span> `/api/v1/tokens`

Fetch token (tokens collection).

<div class="file-header">Request</div>

```
GET /api/v1/tokens?id=YOUR_TOKEN_ID&[options]&token=YOUR_TOKENS_TOKEN
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
            <td>A set of valid arguments to search and sort specific needed tokens.</td>
        </tr>
        <tr>
            <td>token</td>
            <td>REQUIRED</td>
            <td>Valid Tokens Token.</td>
        </tr>
    </tbody>
</table>

##### Result

Returns an array of item objects.

##### Options

You can send options for the query to search items in a collection that matches the specific filter's conditions.  

`options` is an array of valid values for [filter()](s://github.com/flextype/flextype/blob/dev/src/flextype/Support/Helpers/FilterHelper.php) and [find()](s://github.com/flextype/flextype/blob/dev/src/flextype/Support/Helpers/FindHelper.php) helpers.

<br>

##### <a name="endpoint-create"></a> <span class="text-decoration-none text-sm" style="padding: 4.5px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(34 197 94); color: white;">POST</span> `/api/v1/tokens`

Create token.

<div class="file-header">Request</div>

```
POST /api/v1/tokens
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
            <td>token</td>
            <td>REQUIRED</td>
            <td>Valid Tokens token.</td>
        </tr>
        <tr>
            <td>access_token</td>
            <td>REQUIRED</td>
            <td>Valid Access token.</td>
        </tr>
        <tr>
            <td>data</td>
            <td>REQUIRED</td>
            <td>Data to store for the token.</td>
        </tr>
    </tbody>
</table>

##### Result
Returns the token item object for the token item that was just created.

##### Examples

Create new token.

<div class="file-header">Request</div>

```
POST /api/v1/tokens
```

<div class="file-header">Body</div>

```json
{
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018",
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>

```json
{
    "token": "77406fc3cd37e700fec17e44290c0049",
    "access_token": "d80d04cec3b1025024b91f04bdff029f"
}
```

<br>

##### <a name="endpoint-generate"></a> <span class="text-decoration-none text-sm" style="padding: 4.5px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(34 197 94); color: white;">POST</span> `/api/v1/tokens`

Generate token.

<div class="file-header">Request</div>

```
POST /api/v1/tokens
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
            <td>token</td>
            <td>REQUIRED</td>
            <td>Valid Tokens token.</td>
        </tr>
        <tr>
            <td>access_token</td>
            <td>REQUIRED</td>
            <td>Valid Access token.</td>
        </tr>
    </tbody>
</table>

##### Result
Returns the token item object for the token item that was just generated.

##### Examples

Generate new token.

<div class="file-header">Request</div>

```
POST /api/v1/tokens
```

<div class="file-header">Body</div>

```json
{
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018",
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>

```json
{
    "token": "77406fc3cd37e700fec17e44290c0049",
}
```

<br>

##### <a name="endpoint-generate-hash"></a> <span class="text-decoration-none text-sm" style="padding: 4.5px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(34 197 94); color: white;">POST</span> `/api/v1/tokens`

Generate token hash.

<div class="file-header">Request</div>

```
POST /api/v1/tokens
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
            <td>token</td>
            <td>REQUIRED</td>
            <td>Valid Tokens token.</td>
        </tr>
        <tr>
            <td>access_token</td>
            <td>REQUIRED</td>
            <td>Valid Access token.</td>
        </tr>
        <tr>
            <td>string</td>
            <td>REQUIRED</td>
            <td>String to hash.</td>
        </tr>
    </tbody>
</table>

##### Result
Returns the token hash result.

##### Examples

Generate token hash.

<div class="file-header">Request</div>

```
POST /api/v1/tokens
```

<div class="file-header">Body</div>

```json
{
	"token": "76a4c6ee27bcb62c227013c7c6157a4a",
    "access_token": "4e30ae8f70d13122ccfce002acf60d10",
    "string": "4e30ae8f70d13122ccfce002acf60d10"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>

```json
{
    "hashed_token": "$2y$10$IEPDsON7sjQ/IOXIl6KAYOqhaSn.MuRTw4dB/dlkK4cLh0Vu0Bgw2"
}
```

<br>

##### <a name="endpoint-verify-hash"></a> <span class="text-decoration-none text-sm" style="padding: 4.5px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(34 197 94); color: white;">POST</span> `/api/v1/tokens`

Verify token hash.

<div class="file-header">Request</div>

```
POST /api/v1/tokens
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
            <td>token</td>
            <td>REQUIRED</td>
            <td>Valid Tokens token.</td>
        </tr>
        <tr>
            <td>access_token</td>
            <td>REQUIRED</td>
            <td>Valid Access token.</td>
        </tr>
        <tr>
            <td>string</td>
            <td>REQUIRED</td>
            <td>String to verify.</td>
        </tr>
        <tr>
            <td>hash</td>
            <td>REQUIRED</td>
            <td>Hash to verify.</td>
        </tr>
    </tbody>
</table>

##### Result
Returns the token hash verification result.

##### Examples

Verify token hash.

<div class="file-header">Request</div>

```
POST /api/v1/tokens
```

<div class="file-header">Body</div>

```json
{
	"token": "760c2fd33be903d5761e11d291ea0545",
    "access_token": "96d72d79af6f3a7cbfc0cf1b19d4e811",
    "string": "4e30ae8f70d13122ccfce002acf60d10",
    "hash": "$2y$10$WPzs3RbBjQFi3HJfUgomQekXg.N1vPCXqHqL6ObVcJJdzGvwSaKnq"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>

```json
{
    "verified": true
}
```

<br>

##### <a name="endpoint-update"></a> <span class="text-decoration-none text-sm" style="padding: 4.5px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(20 184 166); color: white;">PATCH</span> `/api/v1/tokens`

Update token.

<div class="file-header">Request</div>

```
PATCH /api/v1/tokens
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
            <td>Unique identifier of the token.</td>
        </tr>
        <tr>
            <td>token</td>
            <td>REQUIRED</td>
            <td>Valid Tokens token.</td>
        </tr>
        <tr>
            <td>access_token</td>
            <td>REQUIRED</td>
            <td>Valid Access token.</td>
        </tr>
        <tr>
            <td>data</td>
            <td>REQUIRED</td>
            <td>Data to store for the token.</td>
        </tr>
    </tbody>
</table>

##### Result
Returns the token item object for the token item that was just updated.

##### Examples

Update token.

<div class="file-header">Request</div>

```
PATCH /api/v1/tokens
```

<div class="file-header">Body</div>

```json
{
    "id": "77406fc3cd37e700fec17e44290c0049",
	"token": "77406fc3cd37e700fec17e44290c0049",
    "access_token": "d80d04cec3b1025024b91f04bdff029f",
    "data": {
        "title": "Token"
    }
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>

```json
{
    "hashed_access_token": "$2y$10$btMd2ySjFRCvqzbpZXyuteIc/F6Ka6y/rHyJaEI9pFHK5n6EqIVSK",
    "created_at": 1652702640,
    "created_by": "",
    "uuid": "d01ee01a-16e1-44fc-8100-8cad04c41e0a",
    "calls": 1,
    "limit_calls": 0,
    "state": "enabled",
    "title": "Token",
    "modified_at": 1652703057,
    "id": "77406fc3cd37e700fec17e44290c0049"
}
```

<br>

##### <a name="endpoint-delete"></a> <span class="text-decoration-none text-sm" style="padding: 4.5px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(244 63 94); color: white;">DELETE</span> `/api/v1/tokens`

Delete token.

<div class="file-header">Request</div>

```
DELETE /api/v1/tokens
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
            <td>Unique identifier of the token.</td>
        </tr>
        <tr>
            <td>token</td>
            <td>REQUIRED</td>
            <td>Valid Tokens token.</td>
        </tr>
        <tr>
            <td>access_token</td>
            <td>REQUIRED</td>
            <td>Valid Access token.</td>
        </tr>
    </tbody>
</table>

##### Result
Returns an empty body with status 204

##### Examples

<div class="file-header">Request</div>

```
DELETE /api/v1/tokens
```

<div class="file-header">Body</div>

```json
{
	"id": "55849b694669d8a843d571c7c5f9cb6f",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```
