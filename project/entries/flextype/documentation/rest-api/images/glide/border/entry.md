---
title: Border
template: flextype/docs
seo:
  title: Images Rest API Glide Border | Flextype
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/documentation/rest-api/"
  2:
    title: "Images"
    link: "[url]/documentation/rest-api/images/"
---

`border`

Add a border to the image. Required format: `width, color, method`.

**Width**

Sets the border width in pixels, or using relative dimensions.

**Color**

Sets the border color. See supported colors for more information on the available color formats.

**Method**

Sets how the border will be displayed. Available options:

* `overlay` - Place border on top of image (default).
* `shrink` - Shrink image within border (canvas does not change).
* `expand` - Expands canvas to accommodate border.

##### Usage

<div class="file-header">Request</div>

```
GET YOUR_APP_URL/api/entries/images/image.jpg?border=10,5000,overlay&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/entries/images/image.jpg?border=10,FFCC33,expand&token=YOUR_IMAGES_TOKEN
```