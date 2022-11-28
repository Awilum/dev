---
title: Serializers
template: flextype/docs
order: 7
seo:
  title: Serializers for Modern Open Source Flat Files Flextype CMS
  description: Read the documentation about using serializers in Modern Open Source Flat Files Flextype CMS
breadcrumbs:
  1:
    title: "Core Concepts"
    link: "(getBaseUrl)/flextype/documentation/core/"
---

### YAML

YAML (YAML Ain't Markup) is a human friendly data serialization language.

Flextype uses YAML because it's as close to plain English as data serialization and configuration formats get. It has no curly braces, it allows you to omit quotation marks for strings in most cases, and it relies on indentation for structure, which makes it incredibly readable compared to other languages, such as JSON and XML.

YAML is used extensively in Flextype for its configuration files, fieldsets, and also in entries settings.

For more details <a href="(getBaseUrl)/flextype/documentation/core/serializers/yaml">read the guide for the YAML</a>.

### JSON

JSON (JavaScript Object Notation) is most widely used data format for data interchange on the web. This data interchange can happen between two computers applications at different geographical locations or running within same hardware machine.

The good thing is that JSON is a human and machine readable format. So while applications/libraries can parse the JSON data – humans can also look at data and derive meaning from it.

A JSON document may contains text, curly braces, square brackets, colons, commas, double quotes, and maybe a few other characters.

For more details <a href="(getBaseUrl)/flextype/documentation/core/serializers/json">read the guide for the JSON</a>.


### JSON5

The JSON5 Data Interchange Format (JavaScript Object Notation) is a superset of JSON that aims to alleviate some of the limitations of JSON by expanding its syntax to include some productions from [ECMAScript 5.1](https://262.ecma-international.org/5.1/).

For more details <a href="(getBaseUrl)/flextype/documentation/core/serializers/json5">read the guide for the JSON5</a>.

### NEON

NEON is a human-readable structured data format. In Nette, it is used for configuration files. It is also used for structured data such as settings, language translations, etc. 

NEON stands for Nette Object Notation. It is less complex and ungainly than XML or JSON, but provides similar capabilities. It is very similar to YAML. The main advantage is that NEON has so-called entities, thanks to which the configuration of DI services is so sexy. And allows tabs for indentation.

For more details <a href="(getBaseUrl)/flextype/documentation/core/serializers/neon">read the guide for the neon</a>.

### FRONTMATTER

Any file that contains a YAML front matter block will be processed by Flextype as a special file. The front matter must be the first thing in the file and must take the form of valid YAML set between triple-dashed lines. Between these triple-dashed lines, you can set predefined variables or even create custom ones of your own.

For more details <a href="(getBaseUrl)/flextype/documentation/core/serializers/frontmatter">read the guide for the FRONTMATTER</a>.
