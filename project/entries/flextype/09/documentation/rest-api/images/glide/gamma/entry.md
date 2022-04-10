---
title: Gamma
template: flextype/09/docs
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/documentation/rest-api/"
  2:
    title: "Images"
    link: "[url]/documentation/rest-api/images/"
---

`gam`

Adjusts the image gamma. Use values between `0.1` and `9.99`.

##### Usage

<div class="file-header">Request</div>

```
GET YOUR_APP_URL/api/images/entries/image.jpg?gam=0.1&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/image.jpg?gam=9.99&token=YOUR_IMAGES_TOKEN
```