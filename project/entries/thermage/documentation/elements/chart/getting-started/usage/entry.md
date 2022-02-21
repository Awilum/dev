---
title: Usage
template: thermage/documentation/element
seo:
  title: 
  description: 
---

Simple example of usage `Chart` element.

```php
use function Thermage\chart;
use function Thermage\render;

// ...

$data = [
    'apple' => [
        'label' => 'Apple',
        'value' => 100,
        'color' => 'red',
    ],
    'orange' => [
        'label' => 'Orange',
        'value' => 270,
        'color' => 'orange',
    ],
    'lime' => [
        'label' => 'Lime',
        'value' => 220,
        'color' => 'green',
    ],
];

render (
    chart()
        ->data($data)
        ->horizontal()
        ->showPercents()
        ->showValues()
);

render (
    chart()
        ->data($data)
        ->inline()
        ->showPercents()
        ->showValues()
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="width: 100%; height: 16px; color:#dc3545; text-align: left; display: flex;">Apple<span style="width: 119px; margin-left: 21.5px; margin-right: 9px; background:#dc3545;height: 16px;display: inline-block;"></span>17% (100)</div>
    <div class="el-div" style="width: 100%; height: 16px; color:#fd7e14; text-align: left; display: flex;">Orange<span style="margin-left: 14px; margin-right: 9px; width: 322px; background:#fd7e14;height: 16px;display: inline-block;"></span>46% (270)</div>
    <div class="el-div" style="width: 100%; height: 16px; color:#28a745; text-align: left; display: flex;">Lime<span style="width: 229px; margin-left: 29px; margin-right: 9px; background:#28a745;height: 16px;display: inline-block;"></span>37% (220)</div>
    <br>
    <div class="el-div" style="width: 100%; height: 16px; color:#dc3545; text-align: left; display: flex;"><span style="width: 119px; background:#dc3545; height: 16px; display: inline-block;"></span><span style="width: 322px; background:#fd7e14; height: 16px; display: inline-block;"></span><span style="width: 229px; background:#28a745; height: 16px; display: inline-block;"></span></div>
    <br>
    <span style="color: #dc3545; height: 16px; display: inline-block;">Apple 17% (100)</span>
    <span style="color: #fd7e14; height: 16px; display: inline-block;">Orange 46% (270)</span>
    <span style="color: #28a745; height: 16px; display: inline-block;">Lime 37% (220)</span>
  </div>
</div>


