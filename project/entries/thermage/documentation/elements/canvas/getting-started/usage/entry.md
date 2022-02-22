---
title: Usage
template: thermage/documentation/element
seo:
  title: 
  description: 
---

Simple example of usage `Canvas` element.

```php
use function Thermage\canvas;
use function Thermage\render;

// ...

$canvas = canvas();

for ($i=0; $i < 16; $i++) { 
    
    // Cross
    $canvas->pixel($i, $i, 'white');
    $canvas->pixel(16 - $i - 1, $i, 'white');

    // Border
    $canvas->pixel($i, 0, 'red');
    $canvas->pixel(0, $i, 'green');
    $canvas->pixel($i, 16 - 1, 'blue');
    $canvas->pixel(16 - 1, $i, 'yellow');
}

render(
  $canvas
);
```

<div class="terminal">
  <div class="terminal-header">Terminal</div>
  <div class="terminal-body">
    <div class="terminal-command">$ php thermage.php</div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: blue;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: blue;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: blue;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: blue;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: blue;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: blue;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: blue;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: blue;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: blue;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: blue;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: blue;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: blue;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: blue;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: #dc3545;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: #1e293b;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: white;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: blue;"></div>
    </div>
    <div class="flex">
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
      <div class="el-pixel" style="width: 13px; height: 13px; background: green;"></div>
    </div>
  </div>
</div>