---
title: Brightness
template: flextype/09/docs
seo:
  title: Images Rest API Glide Brightness | Flextype
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/flextype/09/documentation/rest-api/"
  2:
    title: "Images"
    link: "[url]/flextype/09/documentation/rest-api/images/"
---

`bri`

Adjusts the image brightness. Use values between `-100` and `+100`, where `0` represents no change.

##### Usage

<div class="file-header">Request</div>

```
GET YOUR_APP_URL/api/images/entries/image.jpg?bri=-50&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/image.jpg?bri=50&token=YOUR_IMAGES_TOKEN
```