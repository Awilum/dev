---
title: Filter
template: flextype/09/docs
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/documentation/rest-api/"
  2:
    title: "Images"
    link: "[url]/documentation/rest-api/images/"
---

`filt`

Applies a filter effect to the image. Accepts `greyscale` or `sepia`.

##### Usage

<div class="file-header">Request</div>

```
GET YOUR_APP_URL/api/images/entries/image.jpg?w=250&dpr=2&filt=greyscale&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/image.jpg?w=250&dpr=2&filt=sepia&token=YOUR_IMAGES_TOKEN
```