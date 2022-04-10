---
title: Flip
template: flextype/09/docs
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/flextype/09/documentation/rest-api/"
  2:
    title: "Images"
    link: "[url]/flextype/09/documentation/rest-api/images/"
---

`flip`

Flips the image. Accepts `v`, `h` and `both`.

##### Usage

<div class="file-header">Request</div>

```
GET YOUR_APP_URL/api/images/entries/image.jpg?flip=v&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/image.jpg?flip=h&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/image.jpg?flip=both&token=YOUR_IMAGES_TOKEN
```