---
title: Contrast
template: flextype/09/docs
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/documentation/rest-api/"
  2:
    title: "Images"
    link: "[url]/documentation/rest-api/images/"
---

`con`

Adjusts the image contrast. Use values between `-100` and `+100`, where `0` represents no change.

##### Usage

<div class="file-header">Request</div>

```
GET YOUR_APP_URL/api/images/entries/image.jpg?con=-50&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/image.jpg?con=50&token=YOUR_IMAGES_TOKEN
```