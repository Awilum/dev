---
title: Master CSS
visibility: visible
routable: true
published_at: '26-05-2020 14:46'
created_at: '26-05-2020 14:46'
description: ''
template: cheatsheets
seo:
  title: Master CSS Cheat Sheet.
  description: A Virtual CSS language with enhanced syntax.
---


### [Available breakpoints](https://docs.master.co/css/appearance)

| class |	properties | description |	
| --- | --- | --- |
| @3xs	| @media (min-width: 360px) { }	| iPhone 6, 7, 8, X, 11, 12 / Galaxy S8 / HTC One… |
| @2xs	| @media (min-width: 480px) { }	| Blackberry Passport / Amazon Kindle Fire HD 7 … |
| @xs	| @media (min-width: 600px) { }	| LG G Pad 8.3 / Amazon Kindle Fire … |
| @sm	| @media (min-width: 768px) { }	| Microsoft Surface / iPad Pro 9.7 / iPad Mini … |
| @md	| @media (min-width: 1024px) { } | iPad Pro 12.9 / Microsoft Surface Pro 3 … |
| @lg	| @media (min-width: 1280px) { } | Google Chromebook Pixel / Samsung Chromebook … |
| @xl	| @media (min-width: 1440px) { } | Macbook Air 2020 M1 / MacBook Pro 15 … |
| @2xl | @media (min-width: 1600px) { }	| Dell Inspiron 14 series … |
| @3xl | @media (min-width: 1920px) { }	| Dell UltraSharp U2412M / Dell S2340M / Apple iMac 21.5-inch |
| @4xl | @media (min-width: 2560px) { }	| Dell UltraSharp U2711 / Apple iMac 27-inch … |

(div class:'lg:flex')
  (div class:'lg:w-6/12 lg:mr-4')

  ### [Appearance](https://docs.master.co/css/appearance)
  | class |	properties |
  | --- | --- | --- |
  | appearance:value	| appearance: value |
  | appearance:none	| appearance: none |
  | appearance:auto	| appearance: auto |
  | appearance:menulist-button	| appearance: menulist-button |
  | appearance:textfield	| appearance: textfield |
  | appearance:button	| appearance: button |
  | appearance:searchfield	| appearance: searchfield |
  | appearance:textarea	| appearance: textarea |
  | appearance:push-button	| appearance: push-button |
  | appearance:slider-horizontal	| appearance: slider-horizontal |
  | appearance:checkbox	| appearance: checkbox |
  | appearance:square-button	| appearance: square-button |
  | appearance:menulist	| appearance: menulist |
  | appearance:listbox	| appearance: listbox |
  | appearance:meter	| appearance: meter |
  | appearance:progress-bar	| appearance: progress-bar |
  (/div)

  (div class:'lg:w-6/12 lg:ml-4')

  ### [Accent Color](https://docs.master.co/css/appearance)
  | class |	properties |
  | --- | --- | --- |
  | accent-color:color / accent:color	 | accent-color: color | 
  | accent:#hex	 | accent-color: #hex | 
  | accent:rgb(rgb)	 | accent-color: rgb(rgb) | 
  | accent:hsl(hsl)	 | accent-color: hsl(hsl) |

  ### [Caret Color](https://docs.master.co/css/appearance)

  | class |	properties |
  | --- | --- | --- |
  | caret-color:color / caret:color  |	caret-color: color |
  | caret:#hex	 | caret-color: #hex |
  | caret:rgb(rgb)  |	caret-color: rgb(rgb) |
  | caret:hsl(hsl)  |	caret-color: hsl(hsl) |
  | caret:transparent	 | caret-color: transparent |

  (/div)
(/div)

(div class:'lg:flex')
  (div class:'lg:w-6/12 lg:mr-4')

  ### [Cursor](https://docs.master.co/css/appearance)

  | class |	properties |
  | --- | --- | --- |
  | cursor:value	| cursor: value |
  | cursor:auto	| cursor: auto |
  | cursor:alias	| cursor: alias |
  | cursor:all-scroll	| cursor: all-scroll |
  | cursor:cell	| cursor: cell |
  | cursor:col-resize	| cursor: col-resize |
  | cursor:context-menu	| cursor: context-menu |
  | cursor:copy	| cursor: copy |
  | cursor:crosshair	| cursor: crosshair |
  | cursor:default	| cursor: default |
  | cursor:e-resize	| cursor: e-resize |
  | cursor:ew-resize	| cursor: ew-resize |
  | cursor:grab	| cursor: grab |
  | cursor:grabbing	| cursor: grabbing |
  | cursor:move	| cursor: move |
  | cursor:n-resize	| cursor: n-resize |
  | cursor:ne-resize	| cursor: ne-resize |
  | cursor:nesw-resize	| cursor: nesw-resize |
  | cursor:no-drop	| cursor: no-drop |
  | cursor:none	| cursor: none |
  | cursor:not-allowed	| cursor: not-allowed |
  | cursor:ns-resize	| cursor: ns-resize |
  | cursor:nw-resize	| cursor: nw-resize |
  | cursor:nwse-resize	| cursor: nwse-resize |
  | cursor:pointer	| cursor: pointer |
  | cursor:progress	| cursor: progress |
  | cursor:row-resize	| cursor: row-resize |
  | cursor:s-resize	| cursor: s-resize |
  | cursor:se-resize	| cursor: se-resize |
  | cursor:sw-resize	| cursor: sw-resize |
  | cursor:text	| cursor: text |
  | cursor:vertical-text	| cursor: vertical-text |
  | cursor:w-resize	| cursor: w-resize |
  | cursor:wait	| cursor: wait |
  | cursor:zoom-in	| cursor: zoom-in |
  | cursor:zoom-out	| cursor: zoom-out |

  (/div)

  (div class:'lg:w-6/12 lg:ml-4')
  ### Box Decoration Break
  | class |	properties |
  | --- | --- | --- |
  | box-decoration-break:type / box:type	| box-decoration-break: type; <br> -webkit-box-decoration-break: type | 
  | box:slice	|  box-decoration-break: slice; <br> -webkit-box-decoration-break: slice | 
  | box:clone	| box-decoration-break: clone; <br> -webkit-box-decoration-break: clone | 

  ### Break After
  | class |	properties |
  | --- | --- | --- |
  | break-after:value	| break-after: value |
  | break-after:auto	| break-after: auto |
  | break-after:avoid	| break-after: avoid |
  | break-after:avoid-column	| break-after: avoid-column |
  | break-after:avoid-page	| break-after: avoid-page |
  | break-after:column	| break-after: column |
  | break-after:left	| break-after: left |
  | break-after:page	| break-after: page |
  | break-after:recto	| break-after: recto |
  | break-after:revert	| break-after: revert |
  | break-after:right	| break-after: right |
  | break-after:verso	| break-after: verso |

  ### Break Inside
  | class |	properties |
  | --- | --- | --- |
  | break-inside:value	| break-inside: value |
  | break-inside:auto	| break-inside: auto |
  | break-inside:avoid	| break-inside: avoid |
  | break-inside:avoid-column	| break-inside: avoid-column |
  | break-inside:avoid-page	| break-inside: avoid-page |
  | break-inside:revert	| break-inside: revert |
  (/div)
(/div)

(div class:'lg:flex')
  (div class:'lg:w-6/12 lg:mr-4')
  ### Clear
  | class |	properties |
  | --- | --- | --- |
  | clear:type	| clear: type |
  | clear:both	| clear: both |
  | clear:left	| clear: left |
  | clear:none	| clear: none |
  | clear:right	| clear: right |
  (/div)
  (div class:'lg:w-6/12 lg:mr-4')
  ### Columns
  | class |	properties |
  | --- | --- | --- |
  | columns:value / cols:value	| columns: value | 
  | cols:count|width	| columns: count width | 
  (/div)
(/div)

(div class:'lg:flex')
  (div class:'lg:w-6/12 lg:mr-4')
  ### Column Span
  | class |	properties |
  | --- | --- | --- |
  | column-span:value / col-span:value | 	column-span: value |
  | col-span:all	| column-span: all |
  | col-span:none	| column-span: none |
  (/div)
  (div class:'lg:w-6/12 lg:mr-4')
  ### Direction
  | class |	properties |
  | --- | --- | --- |
  | direction:ltr	| direction: ltr |
  | direction:rtl	| direction: rtl |
  (/div)
(/div)

| class | properties |
|---|---|
| will-change:value | will-change: value |