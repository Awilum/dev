---
title: valuesSufix
template: thermage/documentation/element
description: Set Chart element values sufix true.
seo:
  title: Set Chart element values sufix. | showValues
  description: You may set Chart element values sufix with help of method showValues
---

```php
/**
 * Set chart values sufix.
 *
 * @param string $value Sufix value.
 *
 * @return self Returns instance of the Chart class.
 *
 * @access public
 */
public function valuesSufix(string $value): self
```

#### Examples

Set Chart element type showValues using fluent interface
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

render(
  chart()->data($data)->showValues()->valuesSufix('items')
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="width: 100%; height: 16px; color:#dc3545; text-align: left; display: flex;">Apple<span style="width: 119px; margin-left: 21.5px; margin-right: 9px; background:#dc3545;height: 16px;display: inline-block;"></span>(100items)</div>
    <div class="el-div" style="width: 100%; height: 16px; color:#fd7e14; text-align: left; display: flex;">Orange<span style="margin-left: 14px; margin-right: 9px; width: 322px; background:#fd7e14;height: 16px;display: inline-block;"></span>(270items)</div>
    <div class="el-div" style="width: 100%; height: 16px; color:#28a745; text-align: left; display: flex;">Lime<span style="width: 229px; margin-left: 29px; margin-right: 9px; background:#28a745;height: 16px;display: inline-block;"></span>(220items)</div>
  </div>
</div>