---
title: inline
template: thermage/documentation/element
description: Set Chart element type inline.
seo:
  title: Set Chart element type inline. | inline
  description: You may set Chart element type inline with help of method inline
---

```php
/**
 * Set chart type inline.
 *
 * @return self Returns instance of the Chart class.
 *
 * @access public
 */
public function inline(): self
```

#### Examples

Set Chart element type inline using fluent interface
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
  chart()->data($data)->inline()
);
```

Set Chart element type inline using using magic classes pipeline
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
  chart('', 'inline')->data($data)
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="el-div" style="width: 100%; height: 16px; color:#dc3545; text-align: left; display: flex;"><span style="width: 119px; background:#dc3545; height: 16px; display: inline-block;"></span><span style="width: 322px; background:#fd7e14; height: 16px; display: inline-block;"></span><span style="width: 229px; background:#28a745; height: 16px; display: inline-block;"></span></div>
    <br>
    <span style="color: #dc3545; height: 16px; display: inline-block;">Apple</span>
    <span style="color: #fd7e14; height: 16px; display: inline-block;">Orange</span>
    <span style="color: #28a745; height: 16px; display: inline-block;">Lime</span>
  </div>
</div>