---
title: Crop
template: flextype/09/docs
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/flextype/09/documentation/rest-api/"
  2:
    title: "Images"
    link: "[url]/flextype/09/documentation/rest-api/images/"
---

`crop`

Crops the image to specific dimensions prior to any other resize operations.<br>
Required format: `width, height, x, y`.

##### Usage

<div class="file-header">Request</div>

```
GET YOUR_APP_URL/api/images/entries/image.jpg?crop=2000,2000,600,655&token=YOUR_IMAGES_TOKEN
```