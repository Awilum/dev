---
title: Registry
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
            title: '<span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(59 130 246); color: white;">GET</span> /api/v1/registry'
            link: "endpoint-fetch"
---

The Flextype Registry API organized around Representational State Transfer (REST) for delivering data from Flextype registry to apps, websites and other. Registry is delivered as JSON data.

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
            <td><span class="text-decoration-none text-sm" style="padding: 3px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(59 130 246); color: white;">GET</span></td>
            <td><a href="#endpoint-fetch">/api/v1/registry</a></td>
            <td>registry.get</td>
            <td>Fetch registry item</td>
        </tr>
    </tbody>
</table>

<br>

##### <a name="endpoint-fetch"></a> <span class="text-decoration-none text-sm" style="padding: 4.5px 5px; font-size: 0.75em; opacity: .9; border-radius: 0.5rem; background: rgb(59 130 246); color: white;">GET</span> `/api/v1/registry`

Fetch registry item

<div class="file-header">Request</div>

```
GET /api/v1/registry?id=YOUR_REGISTRY_ITEM_ID&token=YOUR_REGISTRY_TOKEN
```

##### Query

<table>
    <thead>
        <tr>
            <th>name</th>
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
            <td>token</td>
            <td>REQUIRED</td>
            <td>Valid Registry Token.</td>
        </tr>
    </tbody>
</table>

##### Result

An array of registry item objects.

##### Examples

Fetch Flextype Version from Flextype Registry

<div class="file-header">Request</div>

```
GET /api/v1/registry?id=flextype.manifest.version&token=efe1e36e4d60fcd547e22eb9f795dff9
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>

```json
{
    "data": {
        "key": "flextype.manifest.version",
        "value": "0.10.0"
    }
}
```
