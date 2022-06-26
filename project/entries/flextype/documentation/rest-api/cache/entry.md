---
title: Cache
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
    level2:
        -
            title: '<span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(34 197 94); color: white;">POST</span> Clear cache'
            link: "endpoint-cache-clear"
---

The Flextype Cache API is organized around Representational State Transfer (REST) with the various helper endpoints to deliver data to apps, websites and others. 

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
            <td><span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(34 197 94); color: white;">POST</span></td>
            <td><a href="#endpoint-cache-clear">/api/v1/cache/clear</a></td>
            <td>cache.clear</td>
            <td>Clear cache</td>
        </tr>
    </tbody>
</table>

##### <a name="endpoint-cache-clear"></a> <span class="text-decoration-none text-sm" style="padding: 4.5px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(34 197 94); color: white;">POST</span> `/api/v1/cache/clear`

<div class="file-header">Request</div>

```
POST /api/v1/cache/clear?token=YOUR_CACHE_TOKEN&access_token=YOUR_CACHE_TOKEN
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
            <td>Valid Cache token.</td>
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
GET /api/v1/cache/clear?token=efe1e36e4d60fcd547e22eb9f795dff9&access_token=efe1e36e4d60fcd547e22eb9f795dff9
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>

```
{

}
```