---
title: Utilities
template: flextype/docs
order: 5
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/flextype/documentation/rest-api/"
on_this_page:
  0:
    title: "Endpoints"
    link: "endpoints"
  1:
    title: "Clear cache"
    link: "cache-clear"
---

The Flextype Utilities API is organized around Representational State Transfer (REST) with the various helper endpoints to deliver data to apps, websites and others. Utility helper's data is delivered as JSON data.

#### <a name="endpoints"></a> Endpoints

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
            <td>POST</td>
            <td>/api/v0/utils/cache/clear</td>
            <td>cache.clear</td>
            <td>Clear cache</td>
        </tr>
    </tbody>
</table>

### <a name="utils-cache-clear"></a> Clear cache

<div class="file-header">Request</div>

```
POST /api/v0/utils/cache/clear?token=YOUR_UTILS_TOKEN&access_token=YOUR_ACCESS_TOKEN
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

Empty body.

##### Examples

Clear cache.

<div class="file-header">Request</div>

```
GET /api/v0/utils/cache/clear?token=efe1e36e4d60fcd547e22eb9f795dff9&access_token=efe1e36e4d60fcd547e22eb9f795dff9
```
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>

```json
{}
```
