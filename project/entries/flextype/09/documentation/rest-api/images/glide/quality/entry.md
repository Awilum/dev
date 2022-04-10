---
title: Quality
template: flextype/09/docs
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/flextype/09/documentation/rest-api/"
  2:
    title: "Images"
    link: "[url]/flextype/09/documentation/rest-api/images/"
---

`q`

Defines the quality of the image. Use values between `0` and `100`. Defaults to `90`. Only relevant if the format is set to `jpg` or `pjpg`.


##### Usage

<div class="file-header">Request</div>

```
GET YOUR_APP_URL/api/images/entries/image.jpg?q=100&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/image.jpg?q=65&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/image.jpg?q=25&token=YOUR_IMAGES_TOKEN
```
