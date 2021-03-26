# StrUtils

A library of string helpers, to aid a developer.

This is really a small helper project to help with my own needs when I need
to alter a string in some way. Rather than trying to remember built in PHP
functions, why not make them available in a simple to use API?


### Examples

First, require the library using:

```php
require "vendor/autoload.php";
use LH\StrUtils;
```

then call the static methods:

##### PascalCase
```php
StrUtils::PascalCase("string utils") # returns StringUtils
```
##### CamelCase
```php
StrUtils::CamelCase("string utils") # returns stringUtils
```
##### SnakeCase
```php
StrUtils::SnakeCase("string utils") # returns string_utils
```
##### Size
```php
StrUtils::Size("string utils") # returns 12
```
##### ConvertToInt
```php
StrUtils::ConvertToInt("A") # returns 65
```
