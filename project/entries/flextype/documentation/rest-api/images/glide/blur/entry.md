---
title: Blur
template: flextype/docs
seo:
  title: Images Rest API Glide Blur | Flextype
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/documentation/rest-api/"
  2:
    title: "Images"
    link: "[url]/documentation/rest-api/images/"
---

`blur`

Adds a blur effect to the image. Use values between `0` and `100`.

##### Usage

<div class="file-header">Request</div>

```
GET YOUR_APP_URL/api/images/entries/image.jpg?blur=0&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/image.jpg?blur=50&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/image.jpg?blur=100&token=YOUR_IMAGES_TOKEN
```