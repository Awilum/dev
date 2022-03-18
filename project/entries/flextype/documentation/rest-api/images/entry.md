---
title: Images
description: The Flextype Images allows the retrieval and manipulation of image files referenced from media.
template: flextype/docs
order: 3
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/documentation/rest-api/"
on_this_page:
  0:
    title: "Endpoints"
    link: "endpoints"
  1:
    title: "Fetch image"
    link: "fetch-image"
  2:
    title: "Image manipulations"
    link: "displaying-images-in-the-template-glide-options"
---

The Flextype Images API allows the retrieval and manipulation of image files referenced from Flextype site media directory to apps, websites and other media. Images are delivered as files.

### <a name="endpoints"></a> Endpoints

<table>
    <thead>
        <tr>
            <th>Method</th>
            <th>Endpoint</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>GET</td>
            <td>/api/images</td>
            <td>Fetch image</td>
        </tr>
    </tbody>
</table>

### <a name="fetch-image"></a> Fetch image

<div class="file-header">Request</div>

```
GET /api/images/{path:.+}?VALID_ARGUMENTS&token=YOUR_IMAGES_TOKEN
```

##### Parameters

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
<td>{path:.+}</td>
<td>REQUIRED</td>
<td>The file path with valid params for image manipulations.</td>
</tr>
</tbody>
</table>

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
<td>*</td>
<td>REQUIRED</td>
<td><a href="#displaying-images-in-the-template-glide-options">Valid arguments for images manipulation</a></td>
</tr>
<tr>
<td>token</td>
<td>REQUIRED</td>
<td>Valid Images token.</td>
</tr>
</tbody>
</table>

##### Examples

Fetch image **venom-2** from upload directory **/movies/venom-2/**

<div class="file-header">Request</div>

```
GET /api/images/entries/movies/venom-2/venom-2.jpg?token=c1fda5a94603a7296f3a0a5370cfe59f
```

Fetch image **venom-2** from upload directory **/movies/venom-2/** and do several image manipulations

<div class="file-header">Request</div>

```
GET /api/images/entries/movies/venom-2/venom-2.jpg?w=100&q=70&token=c1fda5a94603a7296f3a0a5370cfe59f
```

### <a name="displaying-images-in-the-template-glide-options"></a> A complete list of available options for Glide/Intervention
* [Orientation]([url]/flextype/documentation/rest-api/images/glide/orientation)
* [Flip]([url]/flextype/documentation/rest-api/images/glide/flip)
* [Crop]([url]/flextype/documentation/rest-api/images/glide/crop)
* [Width]([url]/flextype/documentation/rest-api/images/glide/width)
* [Height]([url]/flextype/documentation/rest-api/images/glide/height)
* [Fit]([url]/flextype/documentation/rest-api/images/glide/fit)
* [Device pixel ratio]([url]/flextype/documentation/rest-api/images/glide/device-pixel-ratio)
* [Brightness]([url]/flextype/documentation/rest-api/images/glide/brightness)
* [Contrast]([url]/flextype/documentation/rest-api/images/glide/contrast)
* [Gamma]([url]/flextype/documentation/rest-api/images/glide/gamma)
* [Sharpen]([url]/flextype/documentation/rest-api/images/glide/sharpen)
* [Blur]([url]/flextype/documentation/rest-api/images/glide/blur)
* [Pixelate]([url]/flextype/documentation/rest-api/images/glide/pixelate)
* [Filter]([url]/flextype/documentation/rest-api/images/glide/filter)
* [Border]([url]/flextype/documentation/rest-api/images/glide/border)
* [Quality]([url]/flextype/documentation/rest-api/images/glide/quality)
* [Format]([url]/flextype/documentation/rest-api/images/glide/format)
* [Relative dimensions]([url]/flextype/documentation/rest-api/images/glide/relative-dimensions)
* [Colors]([url]/flextype/documentation/rest-api/images/glide/colors)
