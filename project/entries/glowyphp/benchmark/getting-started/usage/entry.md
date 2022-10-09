---
title: Usage
template: glowyphp/component
seo:
  title: Usage of Registry Package for storing data globally in a well managed fashion, helping to prevent global meltdown
  description: Usage Enterprise-ready Registry Package for storing data globally in a well managed fashion, helping to prevent global meltdown
---

```php
use function Glowy\Benchmark\benchmarkStart;
use function Glowy\Benchmark\benchmarkEnd;
use function Glowy\Benchmark\benchmarkSummary;

benchmarkStart('create entry');

// create a new entry...

benchmarkEnd('create entry');

$summary = benchmarkSummary();

print_r($summary);

/*
^ array:1 [
  "create entry" => array:2 [
    "time" => array:4 [
      "prob_start" => 1665240902.4886
      "prob_end" => 1665240903.4918
      "elapsed" => 1.0031571388245
      "elapsed_formated" => "1.003s"
    ]
    "memory" => array:4 [
      "prob_start" => 5777568
      "prob_end" => 5778264
      "usage" => 696
      "usage_formated" => "696B"
    ]
  ]
]
*/
```